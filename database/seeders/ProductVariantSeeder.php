<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách product_id từ bảng products
        $productIds = DB::table('products')->pluck('id')->toArray();

        if (empty($productIds)) {
            return; // Nếu chưa có sản phẩm nào thì không seed dữ liệu
        }

        $colors = ['Red', 'Blue', 'Black', 'White', 'Green'];
        $storages = ['64GB', '128GB', '256GB', '512GB', '1TB'];
        $statuses = ['active', 'inactive'];
        foreach ($productIds as $productId) {
            for ($i = 0; $i < rand(2, 5); $i++) { // Mỗi sản phẩm có 2-5 biến thể
                DB::table('product_variants')->insert([
                    'product_id'   => $productId,
                    'color'        => $faker->randomElement($colors),
                    'hax_code'        => rand(1000000, 20000000),
                    'storage'      => $faker->randomElement($storages),
                    'origin_price' => rand(1000000, 20000000),
                    'price'        => rand(1000000, 20000000),
                    'stock'        => rand(10, 100),
                    'status' => $faker->randomElement($statuses),
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
        }
    }
}
