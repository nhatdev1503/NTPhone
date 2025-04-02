<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductImagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'mini_image' => 'https://via.placeholder.com/650',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 1,
                'mini_image' => 'https://via.placeholder.com/651',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 2,
                'mini_image' => 'https://via.placeholder.com/652',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

