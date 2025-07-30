<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    protected $productService;


   

    public function __construct(ProductService $productService)
        {
        
            $this->productService = $productService; 
        }

public function show(){

   $productsCookie = $this->productService->getAllProducts()->where('category_id', 1);
   $productsKit = $this->productService->getAllProducts()->where('category_id', 2);
   return view('welcome', compact('productsCookie', 'productsKit'));


}

}
