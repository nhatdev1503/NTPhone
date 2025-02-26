<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RateSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('rates')->insert([
                'user_id' => rand(1, 50),
                'product_id' => rand(1, 30),
                'rating' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
