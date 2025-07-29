<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   //
    public function index()
    {
        $products = Product::Where('is_available', true)
            ->orderBy('name', 'asc')
            ->get();
        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => '']
        ];
        return view('products.product', compact('products', 'breadcrumbs'));
    }
    //
    public function show($id)
    {
        $product = Product::find($id);
        if ($product == NULL) {
            abort(404, 'Produit non trouvé');  // Produit non trouvé
        }

        if (!$product->is_available) {
            abort(404, 'Produit indisponible');  // Produit indisponible
        }

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => route('catalogue')],
            ['title' => $product->name, 'url' => '']
        ];
        return view('products.product-show', compact('product', 'breadcrumbs'));
    }

         public function store(Request $request)
        {
            $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',]);
        
            Product::create($validated);
     
            return redirect()->back()->with('success','produit ajouté !');
        }


}


