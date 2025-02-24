<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('orders')->insert([
                'user_id'        => rand(1, 10),
                'staff_id'       => rand(1, 5) > 3 ? rand(1, 5) : null, // 60% có staff xử lý, 40% null
                'fullname'       => 'Khách hàng ' . $i,
                'address'        => 'Số ' . rand(1, 100) . ' Đường ABC, Quận XYZ',
                'phone'          => '09' . rand(10000000, 99999999),
                'email'          => 'customer' . $i . '@example.com',
                'total_price'    => rand(100, 5000) * 1000, // Giả sử giá trị đơn hàng từ 100k - 5 triệu
                'status'         => ['pending', 'processing', 'shipped', 'delivered', 'cancelled'][rand(0, 4)],
                'payment_method' => rand(0, 1) ? 'COD' : 'Online',
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}
