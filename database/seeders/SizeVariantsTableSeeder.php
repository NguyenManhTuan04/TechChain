<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('size_variants')->insert([
            [
                'name_size' => 'Small',
                'created_at' => now(),
                'updated_at' => now(),
                ],
            [
                'name_size' => 'Medium',
                'created_at' => now(),
                'updated_at' => now(),
                ],
            [
                'name_size' => 'Large',
                'created_at' => now(),
                'updated_at' => now(),
                ],
            // Add more size variants as needed
        ]);
    }
}
