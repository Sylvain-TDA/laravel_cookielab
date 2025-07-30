<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = Customer::pluck('id')->toArray();
        $order_items = OrderItem::pluck('id')->toArray();

        $basket = [];
        for ($i = 0; $i < 5; $i++) {
            $basket[] = [
                'customer_id' => $customers[array_rand($customers)],
                'order_item_id' => $order_items[array_rand($order_items)],
                'sum' => fake()->randomFloat(2,4,1000),
            ];
        }
        DB::table('basket')->insert($basket);
    }
}
