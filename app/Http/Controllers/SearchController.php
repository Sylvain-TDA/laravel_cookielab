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
   $sort = $request->get('sort');          // Récupérer le paramètre de tri
   
   $products = $this->productService->searchItem($searchName, $sort);  
   
   return view('products.search', compact('products'));
}


}