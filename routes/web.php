<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/contact', [PagesController::class, 'contact'] );
Route::get('/products', [productsController::class, 'products'] );

