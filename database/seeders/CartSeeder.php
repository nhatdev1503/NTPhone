<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 20) as $index) {
            DB::table('carts')->insert([
                'user_id' => rand(1, 50),
                'product_id' => rand(1, 30),
                'color_id' => rand(1, 50),
                'storage_id' => rand(1, 50),
                'quantity' => rand(1, 5),
            ]);
        }
    }
}
