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
            'password' => Hash::make('password'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'avatar' => 'default.jpg',
            'status' => 'active',
            'role' => 'admin',
        ]);

        // Fake thêm user khách hàng và nhân viên
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'username' => $faker->userName,
                'fullname' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'avatar' => 'default.jpg',
                'status' => $faker->randomElement($statuses),
                'role' => $faker->randomElement($roles),
            ]);
        }
    }
}
