<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::controller(ProductController::class)->group(function() {
    Route::get('/', 'index')->name('prod');
//    Route::get('/', 'menu')->name('menu');
    Route::get('/{prod}', 'show')->name('show');
});


Route::controller(CategoryController::class)->group(function() {
//    Route::get('/', 'index')->name('menu');
});
