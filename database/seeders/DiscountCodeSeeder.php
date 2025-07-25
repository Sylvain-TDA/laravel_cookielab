<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            DB::table('products')->insert([
                'name' => fake()->firstName(),
                'discount_percentage' => fake()->randomBetwen(0, 100),
                'discount-fix' => fake()->randomNumber(3),
            ]);
        }
    }
}
