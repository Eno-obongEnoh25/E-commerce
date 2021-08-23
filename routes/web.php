<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuynowController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;



Route::get('welcome', [LoginController::class, 'welcome'])->name('welcome');


Route::get('signup', [SignUpController::class, 'show'])->name('signup');
Route::post('signup', [SignUpController::class, 'signup']);

Route::get('userdashboard', [UserController::class, 'show'])->name('userdashboard');

Route::get('admindashboard', [AdminController::class, 'show'])->name('admindashboard');
Route::post('admindashboard', [AdminController::class, 'addItem']);

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'showlogout'])->name('logout');
Route::post('logout', [LoginController::class, 'logout']);

Route::get('computing', [ItemsController::class, 'showComputing'])->name('computing');
Route::get('phonesAndTablets', [ItemsController::class, 'showPhonesAndTablets'])->name('phonesAndTablets');

Route::get('cart', [CartController::class, 'show'])->name('cart');
Route::post('cart', [CartController::class, 'addToCart']);

Route::delete('cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('buynow', [BuynowController::class, 'buyNow'])->name('buynow');
Route::post('buynow', [BuynowController::class, 'checkOut']);

Route::get('orders', [BuynowController::class, 'orders'])->name('orders');


