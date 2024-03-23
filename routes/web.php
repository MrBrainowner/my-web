<?php

use App\Http\Controllers\accountController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'] );
Route::get('/home', [PagesController::class, 'home'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/products', [productsController::class, 'products'] );


Route::controller(accountController::class)->group(function(){
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('singup');
});
