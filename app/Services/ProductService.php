<?php

namespace App\Services;

use App\Models\Product; 

class ProductService
{
    public function createProduct($data)
    {
        $product = new Product();

        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->url_image = $data['url_image'];
        $product->stock = $data['stock'];
        $product->is_available = $data['is_available'] ?? true;

        $product->create($data);
        return $product;      
    }

    public function updateProduct($id, $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function getProducts()
    {
                return Product::select('id', 'name', 'description', 'price', 'url_image','stock', 'is_available')    
                ->take(9)       
                ->get(); 
   }

    public function getProduct($id)
    {
        return Product::findOrFail($id);
    }


    public function searchItem($search, $sort = null)
{
    $query = Product::query();
    
    // Filtrage par nom si recherche
    if ($search) {
        $query->where('name', 'like', '%' . $search . '%');
    }
    
    // Tri selon le paramètre
    switch ($sort) {
        case 'name':
            $query->orderBy('name');
            break;
        case 'price':
            $query->orderBy('price');
            break;
        default:
            $query->orderBy('name'); // Tri par défaut
            break;
    }
    
    return $query->get();
}


}




  /*public function getProducts(){
        $products = DB::table('products')
                     ->select('name', 'description', 'price', 'url_image')
                     ->get();
        
        return $products;*/