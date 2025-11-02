<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Controller::class, 'index'])
    ->name('index');

Route::get('register', [\App\Http\Controllers\Controller::class, 'register'])
    ->name('register');

Route::get('login', [\App\Http\Controllers\Controller::class, 'login'])
    ->name('login');

Route::prefix('')->group(
    base_path('routes/auth/routes.php'),
);

Route::prefix('admins')->group(
    base_path('routes/admin/routes.php'),
);
