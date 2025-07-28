<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $deliveries = [];
        for ($i = 0; $i < 4; $i++) {
            $deliveries[] = [
                'name' => fake()->word(),
                'cost' => fake()->numberBetween(0,100)
            ];
        }
        DB::table('deliveries')->insert($deliveries);
    }
}
