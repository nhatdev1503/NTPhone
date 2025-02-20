<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        foreach (range(1, 50) as $index) {
            DB::table('users')->insert([
                'fullname' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'avatar' => $faker->imageUrl(200, 200, 'people'),
                'status' => $faker->randomElement(['active', 'inactive']),
                'role' => $faker->randomElement(['admin', 'staff', 'customer']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
