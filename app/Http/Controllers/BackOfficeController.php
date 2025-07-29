<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Services\ProductService;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{


protected $productService;


   

    public function __construct(ProductService $productService)
        {
        
            $this->productService = $productService; 
        }



   

    public function index (): View {

   $products = $this->productService->getAllProducts();
   return view('backoffice.product', compact('products'));
    }

    

    //
  public function show($id)
{
    $product = Product::findOrFail($id);
    
    $breadcrumbs = [
        ['title' => 'Accueil', 'url' => route('accueil')],
        ['title' => 'Backoffice', 'url' => route('backoffice.product')], // ⬅️ Utilise la bonne route !
        ['title' => $product->name, 'url' => '']
    ];

    return view('backoffice.show-product', compact('product', 'breadcrumbs'));
}


public function edit($id)
{


    
}

    public function new (): View {
        return view('backoffice.new-product'); 
    }

    public function delete (): View {
        return view('backoffice.delete-product'); 
    }

    
}
