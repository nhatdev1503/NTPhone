<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductColorSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $colors = ['Red', 'Blue', 'Black', 'White', 'Green'];

        foreach (range(1, 50) as $index) {
            DB::table('product_colors')->insert([
                'product_id' => rand(1, 30),
                'color_name' => $faker->randomElement($colors),
                'additional_color' => rand(0, 50),
            ]);
        }
    }
}
