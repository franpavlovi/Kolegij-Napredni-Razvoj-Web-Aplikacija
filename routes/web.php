<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::resource('product', ProductController::class);

Route::get('/product', [ProductController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



use App\Http\Controllers\CategoryController;

Route::resource('category', CategoryController::class);



use App\Http\Controllers\CityController;

Route::resource('city', CityController::class);


