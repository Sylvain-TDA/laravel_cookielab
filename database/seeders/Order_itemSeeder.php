<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

        $orderItems = [];
        for ($i = 0; $i < 50; $i++) {
            $orderItems[] = [
                'quantity' => fake()->randomNumber(3),
            ];
        }
        DB::table('order_items')->insert($orderItems);
    
    }
}