<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_types')->insert([
            [
                'payment_name' => 'Credit Card',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_name' => 'PayPal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_name' => 'Bank Transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more payment types as needed
        ]);
    }
}
