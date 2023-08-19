<?php

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

Route::get('/login', function () {
    return view('front/blog');
})->name('blog');

Route::get('/loginn', function () {
    return view('login');
})->name('login');
    




