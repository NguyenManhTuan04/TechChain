<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'date' => now(),
                'user_id' => 1,
                'quantity' => 2,
                'status' => 'Mới',
                'cart_id' => 1,
                'payment_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => now(),
                'user_id' => 2,
                'quantity' => 1,
                'status' => 'Mới',
                'cart_id' => 2,
                'payment_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more orders as needed
        ]);
    }
}
