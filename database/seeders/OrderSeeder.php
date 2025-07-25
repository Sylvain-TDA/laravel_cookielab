<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $orders = [];
        for ($i = 0; $i < 10; $i++) {
            $orders[] = [
                'total_amount' => fake()->randomNumber(3),
            ];
        }
        DB::table('orders')->insert($orders);
    }
}

