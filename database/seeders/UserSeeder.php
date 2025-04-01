<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $roles = ['staff', 'customer'];
        $statuses = ['active', 'inactive'];

        // Tạo admin
        User::create([
            'username' => 'admin',
            'fullname' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'avatar' => 'default.jpg',
            'status' => 'active',
            'role' => 'admin',
        ]);
        User::create([
            'username' => 'customer',
            'fullname' => 'Customer',
            'email' => 'customer@example.com',
            'password' => Hash::make('customer'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'avatar' => 'default.jpg',
            'status' => 'active',
            'role' => 'customer',
        ]);
        User::create([
            'username' => 'staff',
            'fullname' => 'Admin User',
            'email' => 'staff@example.com',
            'password' => Hash::make('staff'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'avatar' => 'default.jpg',
            'role' => 'staff',
        ]);

    }
}
