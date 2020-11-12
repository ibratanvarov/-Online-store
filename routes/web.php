<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;



Route::get('/', [MainController::class, 'index'])->name('main.index');



Route::get('/categories', [MainController::class, 'categories'])->name('main.categories');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basketPlace');

Route::post('/basket/add/{id}', [BasketController::class, 'baskedAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');


Route::get('/{category}', [MainController::class, 'category'])->name('main.category');
Route::get('/mobiles/{category?}', [MainController::class, 'product'])->name('main.product');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
