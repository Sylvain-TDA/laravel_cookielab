<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ArticleController extends Controller
{     
    public function index()
    {
$products = Product::all();

        return response()->json([
             $products
        ]);
    }

    /**
     * Récupérer un article spécifique
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Article non trouvé'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    // On fera store, update, destroy dans l'étape suivante
     public function store(Request $request)
    {
        $products = Product::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'description' => $request->description,
        'price' => $request->price,
        'url_image' => $request->url_image,
        'stock' => $request->stock,
        'is_available' => $request->is_available,
        'weight' => $request->weight,
        ]);
        
        return response()->json([
            'success' => true,
            'data' => $products,
            'message' => 'Produit créé avec succès'
        ], 201);
    }
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Produit non trouvé'
            ], 404);
        }

        $products->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $products,
            'message' => 'Produit mis à jour avec succès'
        ]);
    }
   public function destroy(string $id)
    {
        $products = Product::find($id);
        
        if (!$products) {
            return response()->json([
                'success' => false,
                'message' => 'Produit non trouvé'
            ], 404);
        }

        $products->delete();

        return response()->json([
            'success' => true,
            'message' => 'Produit supprimé avec succès'
        ]);
    }
}
