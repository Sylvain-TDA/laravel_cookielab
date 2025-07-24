<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AddToCart extends Controller
{
    public function show (): View {
        return view('addtocart');
    }
}
