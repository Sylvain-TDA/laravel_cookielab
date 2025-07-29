<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
     public function show (): View {
        return view('Layout.backoffice'); 
    }
}
