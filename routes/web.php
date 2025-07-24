<?php

use App\Http\Controllers\AddToCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bandeaupromotions;

Route::get('/', function () {
    return view('welcome');  // Charge resources/views/welcome.blade.php
});


