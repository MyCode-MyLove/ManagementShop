<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('product_price')->insert([
            [
                'product_id' => 1,
                'original_price' => 50000,
                'discount_price' => 45000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 2,
                'original_price' => 40000,
                'discount_price' => 36000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 3,
                'original_price' => 35000,
                'discount_price' => 31050,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 4,
                'original_price' => 39000,
                'discount_price' => 32000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 5,
                'original_price' => 47000,
                'discount_price' => 40000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 6,
                'original_price' => 25000,
                'discount_price' => 22000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 7,
                'original_price' => 35.00,
                'discount_price' => 31.50,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 8,
                'original_price' => 29000,
                'discount_price' => 27000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 9,
                'original_price' => 39000,
                'discount_price' => 35500,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 10,
                'original_price' => 29000,
                'discount_price' => 27000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 11,
                'original_price' => 50000,
                'discount_price' => 45000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 12,
                'original_price' => 40000,
                'discount_price' => 36000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 13,
                'original_price' => 35000,
                'discount_price' => 31050,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 14,
                'original_price' => 39000,
                'discount_price' => 32000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 15,
                'original_price' => 47000,
                'discount_price' => 40000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 16,
                'original_price' => 25000,
                'discount_price' => 22000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 17,
                'original_price' => 35.00,
                'discount_price' => 31.50,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 18,
                'original_price' => 29000,
                'discount_price' => 27000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 19,
                'original_price' => 39000,
                'discount_price' => 35500,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ],
            [
                'product_id' => 20,
                'original_price' => 29000,
                'discount_price' => 27000,
                'discount_percent' => 10,
                'delete_flag' => 1,
            ]
        ]);
    }
}
