<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

        $discountCodes = [];
for ($i = 0; $i < 10; $i++) {
            $discountCodes[] = [
                'name' => fake()->word(),
                'discount_percentage' => fake()->randomBetwen(0, 100),
                'discount-fix' => fake()->randomNumber(3),
            ];
        }
         DB::table('discount_codes')->insert($discountCodes);
    
    }
}