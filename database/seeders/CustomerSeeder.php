<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [];
        for ($i = 0; $i < 20; $i++) {
            $customers[] = [
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->email(),
                'address' => fake()->address(),
            'postal_code' => fake()->randomNumber(5),
            'city' => fake()->city(),
        ];
        }
        DB::table('customers')->insert($customers);
    }
}
