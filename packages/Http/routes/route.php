<?php

use Illuminate\Support\Facades\Route;
use Packages\Http\Controllers\HallController;
use Packages\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return redirect()->to(asset('360/index.html'));
});

Route::get('/hall', [HallController::class,'index'])->name('http::hall');
Route::get('/hall/{slug}', [BrandController::class,'index'])->name('http::hall.brand');
