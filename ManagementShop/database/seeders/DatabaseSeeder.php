<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            ProvidersSeeder::class,
            ProductsSeeder::class,
            ProductPriceSeeder::class,
            FilesSeeder::class,
            ProductFilesSeeder::class,
            CartsSeeder::class,
            CardItemsSeeder::class,
            OrdersSeeder::class,
            OrderItemsSeeder::class,
            PaymentMethodSeeder::class,
            PaymentTransactionSeeder::class,
            FeedbacksSeeder::class,
            UserStatusSeeder::class,
        ]);
    }
}
