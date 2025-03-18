<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/' , [HomeController::class, 'index'])->name('home');

Route::get('/about' , [HomeController::class, 'about'])->name('about');

Route::get('/contact' , [HomeController::class, 'contact'])->name('contact');


Route::get('/shop' , [ShopController::class, 'shop'])->name('shop');

Route::get('/cart', [ShopController::class, 'shop_cart'])->name('cart');

Route::get('/shop/cart/checkout', [ShopController::class, 'checkout'])->name('cart.checkout');

Route::get('/shop/details', [ShopController::class, 'details'])->name('cart.detail');

Route::get('/wishlist', [ShopController::class, 'wishlist'])->name('wishlist');


Route::get('/user', [UserController::class , 'login'])->name('login');



Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
