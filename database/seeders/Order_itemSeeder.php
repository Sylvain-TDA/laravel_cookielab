<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Order_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            DB::table('order_items')->insert([
                'quantity' => fake()->randomNumber(3),
            ]);
        }
    }
}
