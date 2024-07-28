<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'banner_image' => 'banner1.jpg',
                'banner_url' => 'http://example.com/banner1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'banner_image' => 'banner2.jpg',
                'banner_url' => 'http://example.com/banner2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more banners as needed
        ]);
    }
}
