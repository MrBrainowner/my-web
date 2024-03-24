<?php

use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\Pages\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/products', 'products')->name('products');
});

Route::controller(AccountController::class)->group(function(){
    //sign in route
    Route::get('/signin', 'ShowSigninForm')->name('signin');
    Route::post('/signin', 'signin')->name('signin.submit')->middleware('auth');
    //sign up route
    Route::get('/signup', 'ShowSignupForm')->name('signup');
    Route::post('/signup', 'signup')->name('singup.submit');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'profile')->name('profile')->middleware('auth');
});

