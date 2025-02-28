<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('discounts')->insert([
                'code' => strtoupper($faker->lexify('??????')),
                'discount_type' => $faker->randomElement(['percentage', 'fixed']),
                'discount_value' => rand(5, 50),
                'start_date' => now(),
                'expiration_date' => now()->addDays(rand(7, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
