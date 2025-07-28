<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call ([
        CustomerSeeder::class,
        CategorySeeder::class,
        ProductSeeder::class,
        DiscountCodeSeeder::class,
        DeliverySeeder::class,
        OrderSeeder::class,
        Order_itemSeeder::class,
        ]);
    }
}