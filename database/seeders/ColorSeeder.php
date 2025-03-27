<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder {
    public function run(): void {
        $colors = ['Red', 'Blue', 'Green', 'Yellow', 'Black', 'White'];

        foreach ($colors as $color) {
            DB::table('colors')->insert(['name' => $color]);
        }
    }
}
