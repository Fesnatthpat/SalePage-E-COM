<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// --- 1. หน้าทั่วไป ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/allproducts', [AllProductController::class, 'index'])->name('allproducts');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// --- 2. ตะกร้าสินค้า ---
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/update/{id}/{action}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');

// --- 3. Login/Logout ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login/line', [AuthController::class, 'redirectToLine'])->name('login.line');
Route::get('/callback/line', [AuthController::class, 'handleLineCallback']);

// --- 4. ส่วนที่ต้อง Login ---
Route::middleware(['auth'])->group(function () {

    // Checkout & Payment
    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
    
    // ★★★ [เพิ่มบรรทัดนี้] เพื่อให้ Redirect ไปหน้า QR ได้ ★★★
    Route::get('/payment/qr/{orderId}', [PaymentController::class, 'showQr'])->name('payment.qr');

    // ประวัติการสั่งซื้อ (ถ้ามี)
    // Route::get('/orderhistory', [App\Http\Controllers\OrderController::class, 'index'])->name('order.history');

    // Address Management
    Route::get('/address', [AddressController::class, 'index'])->name('address.index');
    Route::post('/address', [AddressController::class, 'saveAddress'])->name('address.save');
    Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');
});

// API
Route::get('/api/amphures/{province_id}', [AddressController::class, 'getAmphures']);
Route::get('/api/districts/{amphure_id}', [AddressController::class, 'getDistricts']);