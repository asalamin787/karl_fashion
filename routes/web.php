<?php

use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\product\productController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', categoryController::class);
Route::resource('products', productController::class);

// Route::controller(productController::class)->group(function(){
//     Route::get('/create_product', 'create')->name('create_product');
//     Route::post('/store', 'store')->name('product_store');
//     Route::get('/show_products', 'show_products')->name('show_products');
//     Route::get('/edit_product/{product}', 'edit')->name('edit_product');
//     Route::post('/update/{product}', 'update')->name('update_product');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');