<?php

use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\product\productController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', categoryController::class);
Route::resource('products', productController::class);
Route::get('/index', [pageController::class, 'index'])->name('index');
Route::get('/shop', [pageController::class, 'shop'])->name('shop');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');