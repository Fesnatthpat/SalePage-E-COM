<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController; // เพิ่ม
use App\Http\Controllers\OrderController; // เพิ่ม
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// --- Route View ทั่วไป ---
Route::get('/', function () {
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // ใช้ Controller แล้ว
// Route::get('/qr', function () { return view('qr'); }); // ลบอันนี้ออก ใช้ route dynamic ด้านล่างแทน
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }

    return view('login');
})->name('login');
Route::get('/ordertracking', function () {
    return view('ordertracking');
});
Route::get('/orderhistory', function () {
    return view('orderhistory');
});
Route::get('/allproducts', function () {
    return view('allproducts');
}); // ถ้าอยากใช้ DB ให้เปลี่ยนเป็น ProductController
Route::get('/profile', function () {
    return view('profile');
});

// --- LINE Login ---
Route::get('/login/line', [AuthController::class, 'redirectToLine'])->name('login.line');
Route::get('/callback/line', [AuthController::class, 'handleLineCallback']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

Route::get('/allproducts', function () {
    return view('allproducts');
})->name('allproducts');

Route::get('/qr', function () {
    return view('qr');
})->name('qr');
// --- Route ที่ต้อง Login เท่านั้น ---
Route::middleware(['auth'])->group(function () {

    // Address System
    Route::get('/payment', [AddressController::class, 'index'])->name('payment');
    Route::post('/update-address', [AddressController::class, 'saveAddress'])->name('address.save');
    Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');

    // Cart System
    Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');

    // Order System
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/payment/qr/{order_id}', [OrderController::class, 'showQr'])->name('payment.qr');
});

// API Address (Public)
Route::get('/api/amphures/{province_id}', [AddressController::class, 'getAmphures']);
Route::get('/api/districts/{amphure_id}', [AddressController::class, 'getDistricts']);
