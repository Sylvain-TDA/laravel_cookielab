<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Product;
use Nette\Utils\Random;

class OrderItemController extends Controller
{
    public function create(Request $request, $id)
    {
        $products = Product::findorFail($id);
        $customers_id = '1';
        $order_id = rand(1,100);

        OrderItem::create([
            'product_id'=> $products->id,
            'customer_id' => $customers_id,
            'quantity' => $request->input('quantity'),
            'order_id' =>  $order_id,
        ]);
        return redirect()->to('/products')->with('added', 'Produit ajouté');
    }   
}
