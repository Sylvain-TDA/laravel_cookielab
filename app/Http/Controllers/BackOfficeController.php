<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Services\ProductService;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{


protected $productService;
 
    public function __construct(ProductService $productService)
        {
        
            $this->productService = $productService; 
        }
 
    public function index (): View {

   $productsCookie = $this->productService->getAllProducts()->where('category_id', 1);
   $productsKit = $this->productService->getAllProducts()->where('category_id', 2);
   return view('backoffice.product', compact('productsCookie', 'productsKit'));

    }
   

  public function show($id)
{
    $product = Product::findOrFail($id);
    
    $breadcrumbs = [
        ['title' => 'Accueil', 'url' => route('accueil')],
        ['title' => 'Backoffice', 'url' => route('backoffice.product')], 
        ['title' => $product->name, 'url' => '']
    ];

    return view('backoffice.show-product', compact('product', 'breadcrumbs'));
}


public function edit($id)
{
    $product = Product::findOrFail($id);
    
    $breadcrumbs = [
        ['title' => 'Accueil', 'url' => route('accueil')],
        ['title' => 'Backoffice', 'url' => route('backoffice.product')],
        ['title' => $product->name, 'url' => '']
    ];

    return view('backoffice.edit-product', compact('product', 'breadcrumbs'));
}


public function update(Request $request, $id)
{


    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|min:4|max:255',
        'price' => 'required|numeric|gt:0',
        'description' => 'required|min:10|max:1000',
        'category_id' => 'required|integer',
        'url_image' => 'nullable|url',
        'weight' => 'nullable|numeric|gt:0',
        'stock' => 'integer|min:0',
    ], [
        'name.required' => 'Le nom du produit est requis.',
        'name.min' => 'Le nom du produit doit comporter au moins 4 caractères.',
        'price.required' => 'Le prix du produit est requis.',
        'price.numeric' => 'Le prix doit être un nombre.',
        'price.gt' => 'Le prix doit être supérieur à 0.',
        'category_id.required' => 'La catégorie du produit est requise.', 
        'description.required' => 'La description du produit est requise.',
        'description.min' => 'La description doit comporter au moins 10 caractères.',
        'description.max' => 'La description ne doit pas dépasser 1000 caractères.',
        'url_image.url' => 'L\'URL de l\'image doit être valide.',
        'weight.numeric' => 'Le poids doit être un nombre.',
        'stock.integer' => 'Le stock doit être un nombre entier.',
        'stock.min' => 'Le stock doit être supérieur ou égal à 0.',
    ]);

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'category_id' => $request->category_id,
        'url_image' => $request->url_image,
        'description' => $request->description,
        'stock' => $request->stock,
        'weight' => $request->weight,
        'is_available' => $request->available,
    ]);

    return redirect()->route('backoffice.show-product', ['id' => $id]) 
    ->with('success', 'Produit modifié avec succès !');
}

public function post(Request $request)
{
  

    $request->validate([
        'name' => 'required|min:4|max:255',
        'price' => 'required|numeric|gt:0',
        'description' => 'required|min:10|max:1000',
        'category_id' => 'required|integer',
        'url_image' => 'nullable|url',
        'weight' => 'nullable|numeric|gt:0',
        'stock' => 'integer|min:0',

    ], [
        'name.required' => 'Le nom du produit est requis.',
        'name.min' => 'Le nom du produit doit comporter au moins 4 caractères.',
        'description.required' => 'La description du produit est requise.',
        'description.min' => 'La description doit comporter au moins 10 caractères.',
        'description.max' => 'La description ne doit pas dépasser 1000 caractères.',
        'price.required' => 'Le prix du produit est requis.',
        'price.numeric' => 'Le prix doit être un nombre.',
        'price.gt' => 'Le prix doit être supérieur à 0.',
        'category_id.required' => 'La catégorie du produit est requise.',  
        'stock.integer' => 'Le stock doit être un nombre entier.',
        'stock.min' => 'Le stock doit être supérieur ou égal à 0.',
        'url_image.url' => 'L\'URL de l\'image doit être valide.',
        'weight.numeric' => 'Le poids doit être un nombre.',    
    ]);

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'category_id' => $request->category_id,
        'url_image' => $request->url_image,
        'description' => $request->description,
        'stock' => $request->stock,
        'weight' => $request->weight,
        'is_available' => $request->available,
        
    ]);

    return redirect()->route('backoffice.product')
        ->with('post', 'Produit créé avec succès !');
    
}




    public function new (): View {
        return view('backoffice.new-product'); 
    }

   
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('backoffice.product')
            ->with('delete', 'Produit supprimé avec succès !');
    }
    
}
