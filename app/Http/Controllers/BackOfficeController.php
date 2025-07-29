<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
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

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => route('backoffice')],
            ['title' => $product->name, 'url' => '']
        ];

        return view('backoffice.product-show', compact('product', 'breadcrumbs'));
    }

    public function edit($id)
    {
        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => '']
        ];
        $product = Product::find($id);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => route('backoffice')],
            ['title' => $product->name . '-edition', 'url' => '']
        ];

        return view('backoffice.product-edit', compact('product', 'breadcrumbs'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'url_image' => $request->input('url_image'),
            'stock' => $request->input('stock'),
            'is_available' => $request->input('is_available'),
            'weight' => $request->input('weight'),
        ]);

        return redirect()->back()->with('success', 'Produit mis à jour avec succès');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->to('/backoffice')->with('success', 'Produit supprimé');
    }
}
