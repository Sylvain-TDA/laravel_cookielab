<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


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
                'description' => 'Un cookie au chocolat noir avec des éclats de caramel.',
                'description_short'=>'Dark chocolate',
                'description_long' =>'A wonderfull baked cookie full of melty chocolate, Made with the best 
                 selection of floor and chocolate.This crunchy cookie with light taste of vanilla and darker chocolate than Trump policy 
                 will make you forget about those of your grand-mother.
                 Enjoy, folks !',
            ],
            (object)[
                'id' => 1,
                'name' => 'Cookie aux pépites de chocolat',
                'price' => 1.99,
                'description' => 'Un cookie moelleux avec des pépites de chocolat fondant.',
                'description_short'=>'Dark chocolate',
                'description_long' =>'A wonderfull baked cookie full of melty chocolate, Made with the best 
                 selection of floor and chocolate.This crunchy cookie with light taste of vanilla and darker chocolate than Trump policy 
                 will make you forget about those of your grand-mother.
                 Enjoy, folks !',
            ],
            (object)[
                'id' => 2,
                'name' => 'Cookie à la vanille',
                'price' => 3.49,
                'description' => 'Un cookie à la vanille avec une texture crémeuse et des éclats de caramel.',
                'description_short'=>'Dark chocolate',
                'description_long' =>'A wonderfull baked cookie full of melty chocolate, Made with the best 
                 selection of floor and chocolate.
                 This crunchy cookie with light taste of vanilla and darker chocolate than Trump policy 
                 will make you forget about those of your grand-mother. \r
                 Enjoy, folks !',
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


