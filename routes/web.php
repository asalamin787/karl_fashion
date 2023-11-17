<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('categories', CategoryController::class);
Route::resource('products', productController::class);
Route::resource('orders', OrderController::class);
Route::resource('coupons', CouponController::class);

Route::post('/add-coupon', [CouponController::class, 'add_coupon'])->name('coupon');
Route::get('/delete-coupon', [CouponController::class, 'destroy'])->name('coupon.destroy');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('product_details/{slug}', [PageController::class,'product_details'])->name('product_details');
Route::get('/thanks', [PageController::class, 'thanks']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/invoice/{order}', [PageController::class, 'invoice'])->name('invoice');

Route::post('/add-cart',[CartController::class,'add'])->name('cart.store');
Route::post('/add-update',[CartController::class,'update'])->name('cart.update');
Route::get('/cart-destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');