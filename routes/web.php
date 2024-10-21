<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});



Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/Iphone', App\Http\Controllers\IphoneController::class);
Route::resource('/Macbook', App\Http\Controllers\MacbookController::class);
