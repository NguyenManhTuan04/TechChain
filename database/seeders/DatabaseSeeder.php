<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionsTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            ReviewsTableSeeder::class,
            CartsTableSeeder::class,
            SizeVariantsTableSeeder::class,
            ColorVariantsTableSeeder::class,
            PaymentTypesTableSeeder::class,
            OrdersTableSeeder::class,
            BannersTableSeeder::class,
            DiscountsTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}

//php artisan db:seed --class=PermissionsTableSeeder
//php artisan db:seed --class=UsersTableSeeder
//php artisan db:seed --class=CategoriesTableSeeder
//php artisan db:seed --class=ProductsTableSeeder
//php artisan db:seed --class=ReviewsTableSeeder
//php artisan db:seed --class=CartsTableSeeder
//php artisan db:seed --class=SizeVariantsTableSeeder
//php artisan db:seed --class=ColorVariantsTableSeeder
//php artisan db:seed --class=ColorVariantsTableSeeder
//php artisan db:seed --class=PaymentTypesTableSeeder
//php artisan db:seed --class=OrdersTableSeeder
//php artisan db:seed --class=BannersTableSeeder
//php artisan db:seed --class=DiscountsTableSeeder
//php artisan db:seed --class=VariantsTableSeeder
