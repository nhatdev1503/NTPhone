<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 100) as $index) {
            DB::table('order_items')->insert([
                'order_id' => rand(1, 20),
                'product_variant_id' => rand(1, 30),
                'quantity' => rand(1, 5),
                'price' => rand(50, 1000),
            ]);
        }
    }
}
