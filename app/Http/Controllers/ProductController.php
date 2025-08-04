<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductSorter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected ProductSorter $sorter;

    public function __construct(ProductSorter $sorter)
    {
        $this->sorter = $sorter;
    }

    public function indexSQL()
    {
        $products = DB::select('
    SELECT * FROM products
    WHERE is_active = 1
    AND is_available = 1
    AND stock > 0
    ORDER BY name ASC
    ');
    }

    /** Afficher la liste des produits disponibles */
    public function index(Request $request)
    {
        $query = Product::sellable();

        $query = $this->sorter->applySort($request, $query);

        $products = $query->paginate(12);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => '']
        ];

        return view('products.product', [
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'sorter' => $this->sorter,
            'currentSort' => $this->sorter->getCurrentSort($request),
            'currentOrder' => $this->sorter->getCurrentOrder($request),
        ]);
    }

    /** Afficher un produit spécifique */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        // Vérifier si le produit est actif et disponible
        if (!$product->is_active || !$product->is_available) {
        abort(404, 'Produit non disponible');
    }

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => route('catalogue')],
            ['title' => $product->name, 'url' => '']
        ];
        return view('products.product-show', compact('product', 'breadcrumbs'));
    }

    /** Afficher tous les produits, y compris ceux qui ne sont pas disponibles (pour l'admin) */
    public function indexAll(Request $request)
    {
        $$query = Product::query();
        $query = $this->sorter->applySort(request(), $query);

        $products = $query->paginate(12);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Tous les produits', 'url' => '']
        ];

        return view('products.product', [
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'sorter' => $this->sorter,
            'currentSort' => $this->sorter->getCurrentSort($request),
            'currentOrder' => $this->sorter->getCurrentOrder($request),
        ]);
    }

    /** Afficher les produits en stock */
    public function inStock(Request $request)
    {
        $query = Product::sellable()->where('stock', '>', 0);
        $query = $this->sorter->applySort($request, $query);

        $products = $query->paginate(12);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => '']
        ];

        return view('products.product', [
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'sorter' => $this->sorter,
            'currentSort' => $this->sorter->getCurrentSort($request),
            'currentOrder' => $this->sorter->getCurrentOrder($request),
        ]);
    }

    /** Afficher les produits d'une catégorie spécifique */
    public function category($categoryId, Request $request)
    {
        $query = Product::sellable()->where('category_id', $categoryId);
        $query = $this->sorter->applySort($request, $query);

        $products = $query->paginate(12);

        $breadcrumbs = [
            ['title' => 'Accueil', 'url' => route('accueil')],
            ['title' => 'Nos produits', 'url' => '']
        ];

        return view('products.product', [
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'sorter' => $this->sorter,
            'currentSort' => $this->sorter->getCurrentSort($request),
            'currentOrder' => $this->sorter->getCurrentOrder($request),
        ]);
    }
}
