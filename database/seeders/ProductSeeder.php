<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('products')->insert([
                'category_id' => rand(1, 10),
                'name' => $faker->word,
                'description' => $faker->sentence,
                'original_price' => rand(100, 1000),
                'price' => rand(80, 900),
                'stock' => rand(10, 100),
                'image' => $faker->imageUrl(300, 300, 'technology'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
