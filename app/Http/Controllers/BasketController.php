<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Basket;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class BasketController extends Controller
{
    public function show(): View
    {

        $temporary_basket = session('temporary_basket', null);
        //dd($temporary_basket,$total_amout);
        return view('components.basket-show', ['temporary_basket' => $temporary_basket]);
    }

    public function beforeBasket(Request $request, $id)
    {
        $item = Product::findOrFail($id);

        $price = Product::select('price')->where('id', $id)->value('price');
        $quantity = (int) $request->get('quantities');

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

        if (isset($basket[$item->id])) {
            $basket[$item->id]['quantity'] += $quantity;
            $basket[$item->id]['sum'] = $basket[$item->id]['quantity'] * $price;
        } else {
            $basket[$item->id] = $new_item;
        }

        session(['temporary_basket' => $basket]);

        //dd($basket);

        return view('products.product-refreshed', compact('basket', 'item'));
    }

    public function createOrder()
    {
        $temporary_basket = session('temporary_basket', null);
        $total_amout = collect($temporary_basket)->sum('sum');
        Order::create([
            'customer_id' => 1,
            'discount_id' => 1,
            'delivery_mode_id' => 1,
            'total_amount' => $total_amout,
        ]);

        session(['temporary_basket' => []]);

        return redirect()->to('/products')->with('created', 'Produit ajouté');
    }

    public function emptyBasket()
    {

        session()->forget('temporary_basket');

        return redirect()->to('/basket')->with('empty', 'Panier vidé');
    }
}
