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

    public function ShowProduct($id)
    {
        $product = $this->productService->getProduct($id);
        return view('components.backoffice.edit', compact('product'));
    }


 
    public function showCreate(){
        return view('components.backoffice.create');
    }

    public function createProduct($data) 
    {
        
    }

    public function UpdateProductField($id, Request $request)
    {
        $this->productService->updateProduct($id, $request->all());
        return redirect()->route('backoffice')->with(compact('product'),'success', 'Produit mis à jour avec succès');
    }

    public function updateNameProduct($id, Request $request)
    {
        $data = $request->only(['name']);
        $this->productService->updateProduct($id, $data);
        return redirect()->route('backoffice')->with('success', 'Nom du produit mis à jour avec succès');
    }


    public function updatePriceProduct($id, Request $request)
    {
        $data = $request->only(['price']);

        $this->productService->updateProduct($id, $data);
        return redirect()->route('backoffice')->with('success', 'Prix du produit mis à jour avec succès');
    }
}


