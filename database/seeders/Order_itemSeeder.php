<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;

class Order_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $products = Product::pluck('id')->toArray(); 
        $orders = Order::pluck('id')->toArray();     

        $orderItems = [];

        for ($i = 0; $i < 50; $i++) {
            $orderItems[] = [
                'product_id' => $products[array_rand($products)],
                'order_id' => $orders[array_rand($orders)],
                'quantity' => fake()->randomNumber(3),
            ];
        }
        DB::table('order_items')->insert($orderItems);
    
    }
}