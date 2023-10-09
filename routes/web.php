<?php

use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\product\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(categoryController::class)->group(function(){
    Route::get('/create_category', 'create')->name('create_category');
    Route::post('/store','store')->name('store');
    Route::get('/show_category', 'show')->name('show_category');
    Route::get('/edit_category/{category}', 'edit')->name('edit_category');
    Route::post('/update/{category}', 'update')->name('update_category');
    Route::get('/destroy/{category}', 'destroy')->name('ctegory_destroy');
});

Route::controller(productController::class)->group(function(){
    Route::get('/create_product', 'create')->name('create_product');
    Route::post('/store', 'store')->name('product_store');
    Route::get('/show_products', 'show_products')->name('show_products');
    Route::get('/edit_product/{product}', 'edit')->name('edit_product');
    Route::post('/update/{product}', 'update')->name('update_product');
    Route::get('/destroy/{product}', 'destroy')->name('product_destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
