<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('notifications')->insert([
                'user_id' => rand(1, 2),
                'order_id' => rand(1, 20),
                'message' => $faker->sentence,
                'is_read' => rand(0, 1),
                'created_at' => now(),
            ]);
        }
    }
}
