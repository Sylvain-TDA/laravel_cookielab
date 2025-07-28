<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\DiscountCode;
use App\Models\Delivery;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $customers = Customer::pluck('id')->toArray(); 
    $discounts = DiscountCode::pluck('id')->toArray();
    $delivery = Delivery::pluck('id')->toArray();
        $orders = [];
        for ($i = 0; $i < 10; $i++) {
            $orders[] = [
                'customer_id' => $customers[array_rand($customers)],
                'discount_id' => $discounts[array_rand($discounts)],
                'delivery_mode_id' => $delivery[array_rand($delivery)],
                'total_amount' => fake()->randomNumber(3),
            ];
        }
        DB::table('orders')->insert($orders);
    }
}

