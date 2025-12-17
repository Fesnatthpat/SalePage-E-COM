<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AllProductController;
// Import Controllers ทั้งหมดที่ใช้
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 1. หน้าแรก (Home) ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// --- 2. หน้าแสดงสินค้าทั้งหมด (All Products) ---
Route::get('/allproducts', [AllProductController::class, 'index'])->name('allproducts');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// --- 4. หน้าตะกร้าสินค้า (Cart) ---
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// --- 5. ระบบสมาชิก (Authentication) ---
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }

    return view('login');
})->name('login');

// LINE Login
Route::get('/login/line', [AuthController::class, 'redirectToLine'])->name('login.line');
Route::get('/callback/line', [AuthController::class, 'handleLineCallback']);

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

// --- 6. หน้า Static ทั่วไป (เมนูอื่นๆ) ---
Route::get('/ordertracking', function () {
    return view('ordertracking');
});
Route::get('/orderhistory', function () {
    return view('orderhistory');
});
Route::get('/profile', function () {
    return view('profile');
});

// --- 7. Route ที่ต้อง Login เท่านั้น (Protected Routes) ---
Route::middleware(['auth'])->group(function () {

    // จัดการที่อยู่ (Address)
    Route::get('/payment', [AddressController::class, 'index'])->name('payment');
    Route::post('/update-address', [AddressController::class, 'saveAddress'])->name('address.save');
    Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');

    // จัดการตะกร้า (Add/Remove)
    Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');

    // สั่งซื้อ (Order)
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/payment/qr/{order_id}', [OrderController::class, 'showQr'])->name('payment.qr');
});

// --- 8. API สำหรับดึงข้อมูลที่อยู่ (อำเภอ/ตำบล) ---
Route::get('/api/amphures/{province_id}', [AddressController::class, 'getAmphures']);
Route::get('/api/tambons/{amphure_id}', [AddressController::class, 'getTambons']);
