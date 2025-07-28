<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(): View
    {
        $products = DB::select('select * from products');

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => '']
        ];

        return view('products.product', [
    'products' => $products,
    'breadcrumbs' => $breadcrumbs
]);
    }

    //
    public function show($id)
    {
          $products = DB::select('select name, description, price, url_image from products');

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => '']
        ];
        $product = Product::find($id);
        
        if (!$product) {
            abort(404);  // Produit non trouvé
        }

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => route('catalogue')],
            ['title' => $product->name, 'url' => '']
        ];

        return view('products.product-show', compact('product', 'breadcrumbs'));
    }
}


