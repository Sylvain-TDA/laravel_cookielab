<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [];
        $category_id = Category::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            $products[] = [
            'category_id' => $category_id[array_rand($category_id)],
            'name' => fake()->lastName(),
            'description' => fake()->sentence(),
            'url_image' => 'https://maison-kayser.com/wp-content/uploads/2024/07/Cookies-au-chocolat-noir.jpg?x25603',
            'weight' => fake()->randomFloat(2, 50, 2000),
            'stock' => fake()->numberBetween(0, 50),
            'is_available' => fake()->boolean(),
            'price' => fake()->randomFloat(2, 1.50, 100),
        ];
    }

        DB::table('products')->insert($products);
    }
}

