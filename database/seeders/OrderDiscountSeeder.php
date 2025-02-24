<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDiscountSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 30) as $index) {
            DB::table('order_discounts')->insert([
                'order_id' => rand(1, 20),
                'discount_id' => rand(1, 20),
                'discount_amount' => rand(10, 200),
            ]);
        }
    }
}
