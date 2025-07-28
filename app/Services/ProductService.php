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


    public function searchItem($search)
    {

    if (empty($search)) {
        return Product::select('id', 'name', 'description', 'price', 'url_image') ->get();
    }
    
    return Product::where('name', 'like', "%{$search}%")
                  ->get();
}
}




  /*public function getProducts(){
        $products = DB::table('products')
                     ->select('name', 'description', 'price', 'url_image')
                     ->get();
        
        return $products;*/