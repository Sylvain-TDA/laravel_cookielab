<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(): View
    {
        $order = Order::latest()->first();
        $order_items = OrderItem::with('product')->where('order_id', $order->id)->get();
        // dd($order_items);
        $order_id = Order::where('customer_id', '1');

        return view('components.basket-show', compact('order_items', 'order_id'));
    }
}
