<?php
use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::get('', [\App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.index');

    Route::group(['prefix' => 'users'], function () {
        Route::get('', [\App\Http\Controllers\UserController::class, 'index'])
            ->name('admin.users.index');
    });

});


