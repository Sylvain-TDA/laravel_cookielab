<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class ProductService{

    public function getProducts(){
        $products = DB::table('products')
                     ->select('name', 'description', 'price', 'url_image')
                     ->get();
        
        return $products;
    }
  
}
