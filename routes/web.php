<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 1. หน้าแรก ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// --- 2. สินค้า ---
Route::get('/allproducts', [AllProductController::class, 'index'])->name('allproducts');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// --- 3. ตะกร้าสินค้า (Cart) ---
// หน้าแสดงตะกร้า
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// เพิ่มสินค้าลงตะกร้า
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
// เพิ่ม/ลด จำนวนสินค้า
Route::get('/cart/update/{id}/{action}', [CartController::class, 'updateQuantity'])->name('cart.update');
// ลบสินค้า
Route::get('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');


// --- 4. ระบบสมาชิก ---
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }
    return view('login');
})->name('login');

Route::get('/login/line', [AuthController::class, 'redirectToLine'])->name('login.line');
Route::get('/callback/line', [AuthController::class, 'handleLineCallback']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// --- 5. Route ที่ต้อง Login ---
Route::middleware(['auth'])->group(function () {
    // Address
    Route::get('/payment', [AddressController::class, 'index'])->name('payment');
    Route::post('/update-address', [AddressController::class, 'saveAddress'])->name('address.save');
    Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');

    // Order
    // Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
    // Route::get('/payment/qr/{order_id}', [OrderController::class, 'showQr'])->name('payment.qr');
});

// --- API ---
Route::get('/qr', function () {
    return view('qr');
});

Route::get('/orderhistory', function () {
    return view('orderhistory');
});

Route::get('/ordertracking', function () {
    return view('ordertracking');
});

Route::get('/api/amphures/{province_id}', [AddressController::class, 'getAmphures']);
Route::get('/api/districts/{amphure_id}', [AddressController::class, 'getDistricts']);