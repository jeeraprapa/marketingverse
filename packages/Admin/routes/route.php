<?php

use Packages\Admin\Controllers\AuthController;
use Packages\Admin\Controllers\BrandController;
use Packages\Admin\Controllers\DashboardController;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
    Route::get('/', function () {
        return redirect()->route('admin::login');
    });
    Route::get('/login', [AuthController::class, 'index'])
         ->name('admin::login');
    Route::post('/login', [AuthController::class, 'login'])
         ->name('admin::login.post');

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
             ->name('admin::dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin::logout');

        Route::get('/brand', [BrandController::class, 'index'])
             ->name('admin::brand');
        Route::get('/brand/create', [BrandController::class, 'create'])
             ->name('admin::brand.create');
        Route::post('/brand', [BrandController::class, 'store'])->name('admin::brand.store');
        Route::get('/brand/{brand}/edit', [BrandController::class, 'edit'])
             ->name('admin::brand.edit');
        Route::patch('/brand/{brand}', [BrandController::class, 'update'])
             ->name('admin::brand.update');
        Route::delete('/brand/{brand}', [BrandController::class, 'destroy'])
             ->name('admin::brand.destroy');

        Route::post('ckeditor/upload', [ImageUploadController::class, 'storeImage'])->name('admin::ckeditor.upload');
    });
});
