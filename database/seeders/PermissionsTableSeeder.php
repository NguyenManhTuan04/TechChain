<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'permission_type' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permission_type' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more permissions as needed
        ]);
    }
}
