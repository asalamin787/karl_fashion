<?php

use App\Http\Controllers\CartController;
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
Route::get('/caet', [pageController::class, 'cart'])->name('cart');
Route::get('/checkout', [pageController::class, 'checkout'])->name('checkout');

Route::post('/add-cart',[CartController::class,'add'])->name('cart.store');
Route::post('/add-update',[CartController::class,'update'])->name('cart.update');
Route::get('/cart-destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');