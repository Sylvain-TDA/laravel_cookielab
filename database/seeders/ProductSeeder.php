<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_id = DB::table('categories')->pluck('id')->toArray();

        DB::table('products')->insert([
            'category_id' => fake()->randomElement($category_id),
            'name' => fake()->lastName(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 1.50, 100),
            'url_image' => 'https://maison-kayser.com/wp-content/uploads/2024/07/Cookies-au-chocolat-noir.jpg?x25603',
            'weight' => fake()->randomFloat(2, 50, 2000),
            'stock' => fake()->numberBetween(0, 50),
            'is_available' => fake()->boolean()
        ]);
    }
}
