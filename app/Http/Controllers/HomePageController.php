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

   $products = $this->productService->getProducts();
   return view('welcome', compact('products'));


}

}
