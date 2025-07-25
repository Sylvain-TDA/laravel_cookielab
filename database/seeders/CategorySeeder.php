<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [];
        for ($i = 0; $i < 2; $i++) {
            $categories[] = [
                'name' => fake()->word(),
            ];
        }
        DB::table('categories')->insert($categories);
    }


}
