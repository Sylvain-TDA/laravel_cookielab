<?php

use App\Http\Controllers\AddToCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bandeaupromotions;

Route::get('/', function () {
    return view('welcome');  // Charge resources/views/welcome.blade.php
})->name('accueil');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');  // Nom : 'catalogue'

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  // Nom : 'contact'