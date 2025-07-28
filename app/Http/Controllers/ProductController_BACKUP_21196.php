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
<<<<<<< HEAD
                'name' => 'Cookie aux pépites de chocolat',
                'price' => 1.99,
                'description' => 'Un cookie moelleux avec des pépites de chocolat fondant.'
            ],
            (object)[
                'id' => 2,
                'name' => 'Cookie à la vanille',
                'price' => 3.49,
                'description' => 'Un cookie à la vanille avec une texture crémeuse et des éclats de caramel.'
=======
                'name' => 'iPhone 15',
                'price' => 999.99,
                'description_long' => 'Le dernier smartphone d\'Apple avec une caméra révolutionnaire et des performances exceptionnelles.'
                ,'description_short' => 'Dark chocolate telephone'
            ],
            (object)[
                'id' => 2,
                'name' => 'Samsung Galaxy S24',
                'price' => 899.99,
                'description_long' => 'Smartphone Android haut de gamme avec écran AMOLED et intelligence artificielle intégrée.',
                'description_short' => 'Dark chocolate telephone'
            ],
            (object)[
                'id' => 3,
                'name' => 'Google Pixel 8',
                'price' => 799.99,
                'description_long' => 'Le meilleur de Google dans un smartphone, avec une photographie assistée par IA.',
                'description_short' => 'Dark chocolate telephone'
>>>>>>> 8ea760f (Use paramters from objects  to write my HTML content)
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
