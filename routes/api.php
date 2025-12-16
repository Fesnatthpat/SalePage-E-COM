<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;

// Route::get('/login/line', [AuthController::class, 'redirectToLine'])->name('login.line');
// Route::get('/callback/line', [AuthController::class, 'handleLineCallback']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
