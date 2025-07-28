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
                'code' => fake()->word(),
                'discount_percentage' => fake()->randomBetwen(0, 100),
                'discount-fix' => fake()->randomNumber(3),
                'valid_from' => now()->subDays(rand(1, 30)),
                'valid_until' => now()->addDays(rand(1, 30)),
                'is_active' => fake()->boolean(),
            ];
        }
        DB::table('discount_codes')->insert($discountCodes);
    }
}