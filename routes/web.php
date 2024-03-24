<?php

use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/products', 'products')->name('products');
});

Route::controller(AccountController::class)->group(function(){
    Route::get('/signin', 'ShowSigninForm')->name('signin');
    Route::post('/signin', 'signin')->name('signin.submit');
    Route::get('/signup', 'ShowSignupForm')->name('signup');
    Route::post('/signup', 'signup')->name('singup.submit');
    Route::get('/profile', 'index')->name('profile');
});
