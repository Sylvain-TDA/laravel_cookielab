<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show (): View {
        return view('components.basket-show');
    }
}
