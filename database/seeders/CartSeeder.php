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
                'user_id' => rand(1, 2),
                'product_variant_id' => rand(1, 5),
                'quantity' => rand(1, 5),
            ]);
        }
    }
}
