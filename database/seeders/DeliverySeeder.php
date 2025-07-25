<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            DB::table('products')->insert([
                'name' => fake()->name(),
                'price' => fake()->randomNumber(2),
            ]);
        }
    }
    
}
