<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

use App\Models\Product;
use App\Models\Category;
use App\Services\ProductSorter;
use Illuminate\Http\Request;
use \Illuminate\Http\RedirectResponse;

class BackOfficeController extends Controller
{
    protected ProductSorter $sorter;

    public function __construct(ProductSorter $sorter)
    {
        $this->sorter = $sorter;
    }

    public function home(): View
    {
        return view('backoffice.dashboard');
    }

    public function index(Request $request): View
    {
        $query = Product::query();
        $query = $this->sorter->applySort(request(), $query);

        $products = $query->paginate(12);

        return view('backoffice.products', [
            'products' => $products,
            'sorter' => $this->sorter,
            'currentSort' => $this->sorter->getCurrentSort($request),
            'currentOrder' => $this->sorter->getCurrentOrder($request),
        ]);
    }

    public function show(Product $product): View
    {
        // Vérifier si le produit est actif
        if (!$product->is_active) {
            abort(404, 'Produit non disponible');
        }
        return view('backoffice.product-details', compact('product'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('backoffice.new-product', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weight' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'is_available' => 'boolean',
        ]);

        if ($request->hasFile('url_image')) {
            $data['url_image'] = $request->file('url_image')->store('images', 'public');
        } else {
            $data['url_image'] = null;
        }

        $data['is_active'] = $request->has('is_active');
        $data['is_available'] = $request->has('is_available');

        Product::create($data);

        return redirect()->back()->with('success', 'Produit mis à jour.');
    }

    public function edit(Product $product): View
    {
        $categories = Category::all();
        return view('backoffice.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weight' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'is_available' => 'boolean',
        ]);

        $product->update($data);
        return redirect()->route('storeBackOffice')->with('success', 'Produit mis à jour.');
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('deleteProduct')->with('success', 'Produit supprimé avec succès.');
    }
}
