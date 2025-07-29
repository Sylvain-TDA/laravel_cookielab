<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class BackOfficeController extends Controller

{
           

         public function index(): View
    {
        $products = Product::All();

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => '']
        ];

        return view('backoffice.product', [
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
            ['title' => 'BackOffice', 'url' => '']
        ];
        $product = Product::find($id);
        
        if (!$product) {
            abort(404);  // Produit non trouvé
        }

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => route('backoffice')],
            ['title' => $product->name, 'url' => '']
        ];

        return view('backoffice.product-show', compact('product', 'breadcrumbs'));
    }

}
