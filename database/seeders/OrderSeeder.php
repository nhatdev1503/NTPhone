<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $latestOrder = DB::table('orders')->latest('id')->first();
        $nextOrderNumber = $latestOrder ? ((int)substr($latestOrder->order_code, 2)) + 1 : 1;
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('orders')->insert([
                'order_code'     => 'OD' . str_pad($nextOrderNumber++, 5, '0', STR_PAD_LEFT),
                'user_id'        => rand(1, 10),
                'staff_id'       => rand(1, 5) > 3 ? rand(1, 5) : null, 
                'discount_id'    => rand(1, 10), 
                'fullname'       => 'Khách hàng ' . $i,
                'address'        => 'Số ' . rand(1, 100) . ' Đường ABC, Quận XYZ',
                'phone'          => '09' . rand(10000000, 99999999),
                'email'          => 'customer' . $i . '@example.com',
                'total_price'    => rand(100, 5000) * 1000, // Giả sử giá trị đơn hàng từ 100k - 5 triệu
                'discount_amount'=> rand(10000, 50000), // Khoảng giảm giá từ 10k - 50k
                'status'         => ['pending', 'processing', 'shipped', 'delivered', 'cancelled'][rand(0, 4)],
                'payment_method' => $faker->randomElement(['VNPay', 'MoMo', 'COD']),
                'payment_status' => $faker->randomElement(['pending', 'paid', 'failed']),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}
