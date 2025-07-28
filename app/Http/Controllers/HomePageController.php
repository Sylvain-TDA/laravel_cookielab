<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    protected $productService;


   

    protected function __construct(ProductService $productService)
        {
        
            $this->productService = $productService; 
        }

protected function index(){

   $products = $this->productService->getProducts();
   return view('welcome', compact('products'));


}












}
