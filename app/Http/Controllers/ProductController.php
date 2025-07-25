<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = collect([
            (object)[
                'id' => 0,
                'name' => 'Super dupper cookie',
                'price' => 2.50,
                'description' => 'Un cookie au chocolat noir avec des éclats de caramel.'
            ],
            (object)[
                'id' => 1,
                'name' => 'Cookie aux pépites de chocolat',
                'price' => 1.99,
                'description' => 'Un cookie moelleux avec des pépites de chocolat fondant.'
            ],
            (object)[
                'id' => 2,
                'name' => 'Cookie à la vanille',
                'price' => 3.49,
                'description' => 'Un cookie à la vanille avec une texture crémeuse et des éclats de caramel.'
            ]
        ]);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits', 'url' => '']
        ];

        return view('products.product', compact('products', 'breadcrumbs'));
    }

    //
    public function show($id)
    {
        $products = collect([
            (object)[
                'id' => 0,
                'name' => 'Super dupper cookie',
                'price' => 2.50,
                'description' => 'Un cookie au chocolat noir avec des éclats de caramel.'
            ],
            (object)[
                'id' => 1,
                'name' => 'Cookie aux pépites de chocolat',
                'price' => 1.99,
                'description' => 'Un cookie moelleux avec des pépites de chocolat fondant.'
            ],
            (object)[
                'id' => 2,
                'name' => 'Cookie à la vanille',
                'price' => 3.49,
                'description' => 'Un cookie à la vanille avec une texture crémeuse et des éclats de caramel.'
            ]
        ]);

        $product = $products->get($id);
        
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
