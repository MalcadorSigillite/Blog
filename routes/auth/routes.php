<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('register/post', [AuthController::class, 'register_post'])
    ->name('register.post');

Route::post('login/post', [AuthController::class, 'login_post'])
    ->name('login.post');

Route::get('logout', [AuthController::class, 'logout'])
    ->name('logout');
