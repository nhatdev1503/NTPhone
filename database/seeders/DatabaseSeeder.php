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
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductColorSeeder::class,
            ProductStorageSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            PaymentSeeder::class,
            MessageSeeder::class,
            BannerSeeder::class,
            ReviewSeeder::class,
            DiscountSeeder::class,
            OrderDiscountSeeder::class,
            NotificationSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}
