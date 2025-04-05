<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // DiscountSeeder::class,
            // UserSeeder::class,
            // CategorySeeder::class,
            ProductSeeder::class,
            // ProductVariantSeeder::class,
            // CartSeeder::class,
            // OrderSeeder::class,
            // OrderItemSeeder::class,
            // MessageSeeder::class,
            // BannerSeeder::class,
            // CommentSeeder::class,
            // RateSeeder::class,
            // NotificationSeeder::class,
            // FavoriteSeeder::class,
            // ColorSeeder::class,
            // StorageSeeder::class,
        ]);
    }
}
