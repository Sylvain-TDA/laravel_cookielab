<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Basket;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function show(): View
    {


        //     $order = Order::latest()->first();
        //     $order_items = OrderItem::with('product')->where('order_id', $order->id)->get();
        //     // dd($order_items);
        //     $order_id = Order::where('customer_id', '1');
        //     $basket = Basket::where('order_item_id', $order->id)->get();

        $temporary_basket = session('temporary_basket', null);
        //dd($temporary_basket);

        return view('components.basket-show', ['temporary_basket' => $temporary_basket]);
    }

    public function beforeBasket(Request $request, $id)
    {
        $item = Product::findOrFail($id);

        $price = Product::select('price')->where('id', $id)->value('price');
        $quantity = $request->get('quantities');

        $new_item = [
            'product_id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'price' => $price,
            'quantity' => $quantity,
            'url_image' => $item->url_image,
            'sum' => $quantity * $price,
        ];

        $basket = session('temporary_basket', []);

        $basket[$item->id] = $new_item;

        session(['temporary_basket' => $basket]);

        //dd($basket);


        return view('products.product-refreshed', compact('basket', 'item'));
    }

    public function createOrder(Request $request)
    {

        Order::create([
            'customer_id' => 1,
            'discount_id' => 1,
            'delivery_mode_id' => 1,
            'total_amount' => 1200,
        ]);

         session(['temporary_basket' => []]);

        return redirect()->to('/products')->with('created', 'Produit ajouté');
    }
}
