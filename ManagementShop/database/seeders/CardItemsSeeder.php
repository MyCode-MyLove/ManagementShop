<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả ID từ bảng carts và products
        $cartIDs = \DB::table('carts')->pluck('id');
        $productIDs = \DB::table('products')->pluck('id');
        $cartItems = [];

        for($i = 0; $i < 10; $i++){
            $cart_id = $cartIDs->random(); // Lấy ngẫu nhiên ID giỏ hàng
            $product_id = $productIDs->random(); // Lấy ngẫu nhiên ID sản phẩm
            $quantity = rand(1, 100); // Số lượng ngẫu nhiên

            // Check for unique cart_id and product_id combination
            $exists = \DB::table('cart_items')
                ->where('cart_id', $cart_id)
                ->where('product_id', $product_id)
                ->exists();

            if(!$exists){
                $cartItems[] = [
                    'cart_id' => $cart_id,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                    'user_create' => 1,
                    'user_update' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        \DB::table('cart_items')->insert($cartItems);
    }
}
