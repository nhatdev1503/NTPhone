<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 100) as $index) {
            DB::table('favorites')->insert([
                'user_id' => rand(1, 50),
                'product_id' => rand(1, 5),
                'created_at' => now(),
            ]);
        }
    }
}
