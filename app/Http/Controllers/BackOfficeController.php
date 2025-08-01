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

    public function show($id): View
    {

        return view('backoffice.product-details', compact('id'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('backoffice.new-product', compact('categories'));
    }

    public function store(Request $request)
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

        return redirect()->route('storeBackOffice')->with('success', 'Produit créé avec succès.');
    }

    public function edit($id): View
    {
        return view('backoffice.edit-product', compact('id'));
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('deleteProduct')->with('success', 'Produit supprimé avec succès.');
    }
}
