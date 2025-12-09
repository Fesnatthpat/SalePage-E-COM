<?php

use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/qr', function () {
    return view('qr');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

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

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/product-management', function () {
    return view('product-management');
});

Route::get('/ordermanagement', function () {
    return view('ordermanagement');
});

Route::get('/stocksystem', function () {
    return view('stocksystem');
});

Route::get('/discount-promotion', function () {
    return view('discount-promotion');
});

Route::get('/reviewmanagement', function () {
    return view('reviewmanagement');
});

Route::get('/discount-promotion', function () {
    return view('discount-promotion');
});

Route::get('/store-settings', function () {
    return view('store-sttings');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/formsetpassword', function () {
    return view('formsetpassword');
});