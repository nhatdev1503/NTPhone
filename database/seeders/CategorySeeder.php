<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'iPhone',
                'description' => 'Là sản phẩm điện thoại thông minh của hãng Apple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'XiaoMi',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ,
            [
                'name' => 'Oppo',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hwei',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vivo',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ipad',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phụ kiện',
                'description' => 'Là điện thoại thông minh của hãng Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
