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
                'category_id' => rand(1, 5),
                'name' => $faker->word,
                'description' => $faker->sentence,
                'original_price' => $faker->randomFloat(2, 1000000, 50000000),
                'price' => $faker->randomFloat(2, 1000000, 50000000),
                'stock' => $faker->numberBetween(1, 100),
                'image' => 'default.jpg',
                'screen' => $faker->randomElement([null, '6.7 inch OLED', '6.1 inch LCD']),
                'os' => $faker->randomElement([null, 'Android', 'iOS', 'Windows Phone']),
                'rear_camera' => $faker->randomElement([null, '48MP + 12MP', '64MP + 8MP + 2MP']),
                'front_camera' => $faker->randomElement([null, '12MP', '32MP']),
                'cpu' => $faker->randomElement([null, 'Snapdragon 8 Gen 2', 'Apple A16 Bionic']),
                'ram' => $faker->randomElement([null, '4GB', '6GB', '8GB']),
                'battery' => $faker->randomElement([null, '4000mAh', '5000mAh'])
            ]);
        }
    }
}
