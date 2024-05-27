<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả ID từ bảng carts và users
        $orderIDs = \DB::table('orders')->pluck('id');
        $productIDs = \DB::table('products')->pluck('id');
        $orderitems = [];

        for ($i = 0; $i < 20; $i++) {
            $orderitems[] = [
                'order_date' => now(),
                'quantity' => rand(1, 100), // Số tiền tổng ngẫu nhiên
                'total_amount' => rand(15000, 1000000), // Số tiền phụ ngẫu nhiên
                'status' => 'Pending', // Trạng thái mặc định
                'order_id' => $orderIDs->random(), // Lấy ngẫu nhiên ID giỏ hàng
                'product_id' => $productIDs->random(), // Lấy ngẫu nhiên ID người dùng
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

    }
}
