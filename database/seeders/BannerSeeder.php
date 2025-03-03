<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 55) as $index) {
            DB::table('banners')->insert([
                'title' => $faker->sentence,
                'image' => $faker->imageUrl(600, 300, 'advertising'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
