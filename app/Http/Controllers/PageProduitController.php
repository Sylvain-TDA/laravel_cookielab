<?php

namespace App\Http\Controllers;


use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PageProduitController extends Controller
{
           

         public function index(): View
    {
        $products = Product::where('is_available',1)->get();

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
    public function show($id): View
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

    public function calculate(Request $request) {
       $quantity =  $request->get('quantity');
       $price = $request->get('price');

       $sum = $quantity*$quantity;

       return view ('products.product-show',compact('sum'));

    }

}
