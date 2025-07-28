<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    protected $productService;


   

    public function __construct(ProductService $productService)
        {
        
            $this->productService = $productService; 
        }

public function search(Request $request) 
{
   $searchName = $request->get('search');  // Récupérer la valeur du formulaire
   $products = $this->productService->searchItem($searchName);  
   
   return view('products.search', compact('products'));
}

}