<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
     public function dynamicModal()
    {
        return view('dynamic-modal.index');
    }

    public function modalContent()
{
    return view('dynamic-modal.user-form');
}
}
