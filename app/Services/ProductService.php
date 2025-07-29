<?php

namespace App\Services;

use App\Models\Product; 

class ProductService
{
    public function getProducts()
    {
                return Product::select('id', 'name', 'description', 'price', 'url_image')    
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