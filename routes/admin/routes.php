<?php
use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::get('', [\App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.index');



});


