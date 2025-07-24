<?php

use App\Http\Controllers\AddToCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bandeaupromotions;

Route::get('/', function () {
    return view('welcome'); 
})->name('accueil');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');  
Route::get('/contact', function () {
    return view('contact');
})->name('contact');  

Route::get('/panier', function () {
    return view('basket');
})->name('panier');  