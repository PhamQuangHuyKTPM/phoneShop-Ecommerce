<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\dashboard\HomeController;

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
    return view('front.index');
})->name('home');

Route::get('/shop-details', function () {
    return view('front.shop-details');
})->name('shop-details');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/shop-grid', function () {
    return view('front.shop-grid');
})->name('shop-grid');

Route::get('/shoping-cart', function () {
    return view('front.shoping-cart');
})->name('shoping-cart');

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');

<<<<<<< HEAD
Route::get('/checkout', function () {
    return view('front.checkout');
})->name('checkout');

Route::get('/blog-details', function () {
    return view('front.blog-details');
})->name('blog-details');

=======
Route::get('/blog-details', function () {
    return view('front.blog-details');
})->name('blog-details');
>>>>>>> 21015fd2aadab53fec48e154b9085ee8ae828762

Route::get('/loginn', function () {
    return view('login');
})->name('login');
    
Route::get('/signup', function () {
    return view('signup');
})->name('signup');


// Admin routes
Route::get('/trang-admin',  [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('dashboard.index-1');
})->name('admin');


