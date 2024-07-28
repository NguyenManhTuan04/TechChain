<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'address' => '123 Main St',
                'email' => 'johndoe@example.com',
                'phone' => '1234567890',
                'email_verified_at' => now(),
                'role_id' => 1,
                'password' => Hash::make('password'),
                'status' => 'Online',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'address' => '456 Elm St',
                'email' => 'janesmith@example.com',
                'phone' => '0987654321',
                'email_verified_at' => now(),
                'role_id' => 2,
                'password' => Hash::make('password'),
                'status' => 'Offline',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
