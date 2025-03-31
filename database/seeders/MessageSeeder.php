<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('messages')->insert([
                'sender_id' => rand(1, 2),
                'receiver_id' => rand(1, 2),
                'message' => $faker->sentence,
                'is_read' => rand(0, 1),
                'created_at' => now(),
            ]);
        }
    }
}
