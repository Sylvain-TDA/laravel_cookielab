<?php

namespace App\Http\Controllers\Api;

use App\Models\OrderItem;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller

{


    public function index(): JsonResponse
    {
        $products = Product::with('categories')->get();

        return response()->json($products);
    }

    //
    public function show($id): JsonResponse
    {
        $product = Product::find($id);



        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = Product::create(attributes: [
            'name' => 'mon cookie',
            'category_id' => 1,
            'description' => 'il est pas mal',
            'price' =>  2,
            'url_image' => 'https://tse4.mm.bing.net/th/id/OIP.Iw2-f7lE2bdU-Ncc0FNL0gHaLH?r=0&pid=Api',
            'stock' => 1,
            'is_available' => 1,
            'weight' => 100,
        ]);

        return response()->json($product);
    }

    public function edit($id): JsonResponse
    {
        $product = Product::find($id);
        $product->update(attributes: [
            'name' => 'mon cookie',
            'category_id' => 1,
            'description' => 'il est pas mal',
            'price' =>  2,
            'url_image' => 'https://tse4.mm.bing.net/th/id/OIP.Iw2-f7lE2bdU-Ncc0FNL0gHaLH?r=0&pid=Api',
            'stock' => 1,
            'is_available' => 1,
            'weight' => 100,
        ]);


        return response()->json($product);
    }

    public function delete($id): JsonResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json([
        'message' => 'Produit supprimé',
        'id' => $id,
    ]);
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
