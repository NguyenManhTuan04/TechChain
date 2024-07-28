<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'rating' => 4,
                'content' => 'Good product!',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'rating' => 5,
                'content' => 'Excellent!',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more reviews as needed
        ]);
    }
}
