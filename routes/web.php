<?php

use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
})->name('accueil');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');  
Route::get('/contact', function () {
    return view('contact');
})->name('contact');  

Route::get('/basket', [BasketController::class, 'show'])->name('basket');