<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'product_id' => 1,
                'discount_amount' => 10.00,
                'discount_name' => 'Summer Sale',
                'discount_fixed' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'discount_amount' => null,
                'discount_name' => 'Clearance',
                'discount_fixed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more discounts as needed
        ]);
    }
}
