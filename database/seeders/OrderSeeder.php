<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        foreach (range(1, 50) as $index) {
            DB::table('orders')->insert([
                'user_id' => rand(1, 50),
                'staff_id' => rand(1, 10), // Giả định có 10 nhân viên
                'total_price' => rand(100, 2000),
                'status' => $faker->randomElement(['pending', 'processing', 'shipped', 'delivered', 'cancelled']),
                'payment_method' => $faker->randomElement(['COD', 'Online']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
