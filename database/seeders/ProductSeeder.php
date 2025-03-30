<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $statuses = ['active', 'inactive'];
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'category_id' => rand(1, 6),
                'name' => $faker->word,
                'description' => $faker->sentence,
                'image' => 'product.jpg',
                'screen' => $faker->randomElement(['6.1 inches', '6.5 inches', '6.8 inches']),
                'os' => $faker->randomElement(['Android', 'iOS']),
                'rear_camera' => $faker->randomElement(['12MP', '48MP', '108MP']),
                'front_camera' => $faker->randomElement(['8MP', '12MP', '32MP']),
                'cpu' => $faker->randomElement(['Snapdragon 8 Gen 2', 'A16 Bionic', 'Exynos 2200']),
                'ram' => $faker->randomElement(['4GB', '6GB', '8GB', '12GB']),
                'battery' => $faker->randomElement(['4000mAh', '4500mAh', '5000mAh']),
                'view'        => rand(100, 2000),
                'sold'        => rand(1, 100),
                'priority'        => rand(1, 10),
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
}
