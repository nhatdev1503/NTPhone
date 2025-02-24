<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('payments')->insert([
                'order_id' => $index,
                'payment_method' => $faker->randomElement(['VNPay', 'MoMo', 'PayPal', 'CreditCard']),
                'payment_status' => $faker->randomElement(['pending', 'success', 'failed']),
                'transaction_id' => $faker->uuid,
                'amount_paid' => rand(100, 2000),
                'created_at' => now(),
            ]);
        }
    }
}
