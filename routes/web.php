<?php

use App\Http\Controllers\AddressController;
use App\Models\Province;
use Illuminate\Support\Facades\Route; // [สำคัญ] ต้องมีบรรทัดนี้เพื่อเรียกใช้ Model จังหวัด
// use App\Http\Controllers\AddressController;

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});

// =========================================================
// 1. แก้ไข Route Payment ให้ส่งข้อมูลจังหวัดไปที่ View
// =========================================================
Route::get('/payment', function () {
    // ดึงข้อมูลจังหวัด เรียงตามชื่อภาษาไทย
    $provinces = Province::orderBy('name_th', 'asc')->get();

    // ส่งตัวแปร $provinces ไปที่หน้า view 'payment'
    return view('payment', compact('provinces'));
});

Route::get('/qr', function () {
    return view('qr');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/verify', function () {
    return view('verify');
});

Route::get('/ordertracking', function () {
    return view('ordertracking');
});

Route::get('/orderhistory', function () {
    return view('orderhistory');
});

// Route::get('/contactus', function () {
//     return view('contactus');
// });

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Route::get('/product-management', function () {
//     return view('product-management');
// });

// Route::get('/ordermanagement', function () {
//     return view('ordermanagement');
// });

// Route::get('/stocksystem', function () {
//     return view('stocksystem');
// });

// Route::get('/discount-promotion', function () {
//     return view('discount-promotion');
// });

// Route::get('/reviewmanagement', function () {
//     return view('reviewmanagement');
// });

// Route::get('/store-settings', function () {
//     return view('store-sttings');
// });

Route::get('/products', function () {
    return view('products');
});

Route::get('/formsetpassword', function () {
    return view('formsetpassword');
});

// =========================================================
// 2. ระบบเลือกที่อยู่ (Address System)
// =========================================================

// หน้าแสดงฟอร์มแยก (ถ้ามี)
// Route::get('/address-form', [AddressController::class, 'index']);

// Route สำหรับรับค่าจากฟอร์มแล้วบันทึกลง Database
Route::post('/update-address', [AddressController::class, 'updateAddress'])->name('address.update');

// API สำหรับ JavaScript ดึงข้อมูล (Amphure & District)
Route::get('/api/amphures/{province_id}', [AddressController::class, 'getAmphures']);
Route::get('/api/districts/{amphure_id}', [AddressController::class, 'getDistricts']);
Route::post('/update-address', [AddressController::class, 'saveAddress']);
// แก้ไข Route นี้ให้เรียกผ่าน Controller
Route::get('/payment', [AddressController::class, 'index']);

// แก้ไขที่อยู่ (ใช้ PUT)
Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');

// ลบที่อยู่ (ใช้ DELETE)
Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');