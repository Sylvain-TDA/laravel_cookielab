<?php

use App\Http\Controllers\AddToCart;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [AddToCart::class, 'show']);