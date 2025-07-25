<?php

namespace App\Http\Controllers;


use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class PageProduit extends Controller
{

    public function show() : View
    {
        return view('page-produit');
    }


}
