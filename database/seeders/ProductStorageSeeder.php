<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductStorageSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $storages = ['64GB', '128GB', '256GB', '512GB'];

        foreach (range(1, 50) as $index) {
            DB::table('product_storages')->insert([
                'product_id' => rand(1, 30),
                'storage_size' => $faker->randomElement($storages),
                'additional_price' => rand(0, 100),
            ]);
        }
    }
}
