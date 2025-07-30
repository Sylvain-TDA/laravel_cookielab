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
    public function show($id): View
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
            ['title' => $product?->name, 'url' => '']
        ];

        return view('backoffice.product-show', compact('product', 'breadcrumbs'));
    }

    public function edit($id): View
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

         $request->validate( [
            'name' => 'required|max:255',
            'category_id' => 'numeric|required',
            'description' => 'required|max:255',
            'price' => 'numeric|required|gt:0',
            'url_image' => 'nullable',
            'stock' => 'numeric|min:0',
            'is_available' => 'nullable',
            'weight' => 'numeric|nullable|gt:0',
        ],  [
            'name.required' => 'Le nom du produit est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'category_id.required' => 'La catégorie est obligatoire.',
            'category_id.numeric' => 'La catégorie doit être un identifiant numérique.',
            'description.required' => 'La description est obligatoire.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.gt' => 'Le prix doit être strictement supérieur à zéro.',
            'stock.numeric' => 'Le stock doit être un nombre.',
            'stock.min' => 'Le stock ne peut pas être négatif.',
            'weight.numeric' => 'Le poids doit être un nombre.',
            'weight.gt' => 'Le poids doit être strictement supérieur à zéro.',
        ]);

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

    public function store(Request $request)
    {
        $request->validate(rules: [
            'name' => 'required|max:255',
            'category_id' => 'numeric|required',
            'description' => 'required|max:255',
            'price' => 'numeric|required|gt:0',
            'url_image' => 'nullable',
            'stock' => 'numeric|min:0',
            'is_available' => 'nullable',
            'weight' => 'numeric|nullable|gt:0',
        ], params: [
            'name.required' => 'Le nom du produit est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'category_id.required' => 'La catégorie est obligatoire.',
            'category_id.numeric' => 'La catégorie doit être un identifiant numérique.',
            'description.required' => 'La description est obligatoire.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.gt' => 'Le prix doit être strictement supérieur à zéro.',
            'stock.numeric' => 'Le stock doit être un nombre.',
            'stock.min' => 'Le stock ne peut pas être négatif.',
            'weight.numeric' => 'Le poids doit être un nombre.',
            'weight.gt' => 'Le poids doit être strictement supérieur à zéro.',
        ]);
        Product::create(attributes: [
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'url_image' => $request->input('url_image'),
            'stock' => $request->input('stock'),
            'is_available' => $request->input('is_available'),
            'weight' => $request->input('weight'),
        ]);

        return redirect()->to('/backoffice')->with('success', 'Produit ajouté');
    }

    public function showCreate(): View
    {
        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => '']
        ];


        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'BackOffice', 'url' => route('backoffice')],
            ['title' => 'nouveau-produit' . '-edition', 'url' => '']
        ];

        return view('backoffice.product-create');
    }
}
