<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
//**
//
// 1 - Afficher la liste de tous les produits
// 2 - Crée une fonction pour supprimer un produit
// 3 - Crée une fonction pour ajouter un produit

//  */

class BackOfficeController extends Controller
{

 public function __construct(ProductService $productService)
        {
            $this->productService = $productService;
        }

     public function show()
    {
        $products = $this->productService->getProducts();

        return view('backoffice.products', compact('products'));
    }

}


