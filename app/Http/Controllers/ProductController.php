<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /** Afficher la liste des produits disponibles */
    public function index()
    {
        $products = Product::sellable()
            ->orderBy('name', 'asc')
            ->get();

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => '']
        ];
        return view('products.product', compact('products', 'breadcrumbs'));
    }

    /** Afficher un produit spécifique */
    public function show($id)
    {
        // Récupération du produit par son ID
        $product = Product::find($id);

        // Vérification de l'existence du produit
        if (!$product) {
            abort(404, 'Produit non trouvé');  // Produit non trouvé
        }
        if (!$product->is_active) {
            abort(404, 'Produit indisponible');  // Produit indisponible
        }

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => route('catalogue')],
            ['title' => $product->name, 'url' => '']
        ];
        return view('products.product-show', compact('product', 'breadcrumbs'));
    }

    /** Afficher tous les produits, y compris ceux qui ne sont pas disponibles (pour l'admin) */
    public function indexAll()
    {
        $products = Product::all();

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Tous les produits', 'url' => '']
        ];
        return view('products.product-show', compact('product', 'breadcrumbs'));
    }
    
    /** Afficher les produits en stock */
    public function inStock()
    {
        $products = Product::sellable()
            ->where('stock', '>', 0)
            ->orderBy('name', 'asc')
            ->get();

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => '']
        ];
        return view('products.product', compact('products', 'breadcrumbs'));
    }

    /** Afficher les produits d'une catégorie spécifique */
    /**public function category($categoryId)
    {
        $products = Product::where('category_id', $categoryId)
            ->available()
            ->orderBy('name', 'asc')
            ->get();

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Produits par catégorie', 'url' => '']
        ];
        return view('products.product', compact('products', 'breadcrumbs'));
    }*/
}