<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bandeaupromotions;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bandeau', [BandeauPromotions::class, 'show']);
