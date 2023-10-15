<?php

use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\product\productController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', categoryController::class);
Route::resource('products', productController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');