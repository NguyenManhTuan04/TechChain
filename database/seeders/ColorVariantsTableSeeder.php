<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('color_variants')->insert([
            [
                'color_name' => 'Red',
                'created_at' => now(),
                'updated_at' => now(),],
            [
                'color_name' => 'Blue',
                'created_at' => now(),
                'updated_at' => now(),],
            [
                'color_name' => 'Green',
                'created_at' => now(),
                'updated_at' => now(),],
            // Add more color variants as needed
        ]);
    }
}
