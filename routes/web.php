<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;


//////////////////////////////////////////////////////////////////////////

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/categories', [MainController::class, 'categories'])->name('main.categories');
Route::get('/{category}', [MainController::class, 'category'])->name('main.category');
Route::get('/mobiles/{product?}', [MainController::class, 'product'])->name('main.product');
//////////////////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
