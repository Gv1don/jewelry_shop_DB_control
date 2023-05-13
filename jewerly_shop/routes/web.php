<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/types', [TypesController::class, 'Feeling'])->name('types');

Route::get('/products', [ProductsController::class, 'Feeling'])->name('products');

Route::get('/orders', [ZakazsController::class, 'Feeling'])->name('orders');

Route::get('/buyers', [BuyersController::class, 'Feeling'])->name('buyers');

Route::get('/create', function(){
    return 'Get create';
})->name('create');

Route::post('/create', function(){
    return 'Post create';
});

Route::get('/update', function(){
    return 'Get update';
})->name('update');

Route::post('/update', function(){
    return 'Post update';
});

Route::get('/delete', function(){
    return 'Get delete';
})->name('delete');

Route::post('/delete', function(){
    return 'Post delete';
});