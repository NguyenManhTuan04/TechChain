<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'product_id' => 1,
                'quantity' => 2,
                'user_id' => 1,
                'total' => 240.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'quantity' => 1,
                'user_id' => 2,
                'total' => 180.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more carts as needed
        ]);
    }
}
