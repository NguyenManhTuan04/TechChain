<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            [
                'product_id' => 1,
                'size_id' => 1,
                'color_id' => 1,
                'sku' => 1001,
                'sku_quantity' => 5,
                'price' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'size_id' => 2,
                'color_id' => 2,
                'sku' => 1002,
                'sku_quantity' => 10,
                'price' => 180.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more variants as needed
        ]);
    }
}
