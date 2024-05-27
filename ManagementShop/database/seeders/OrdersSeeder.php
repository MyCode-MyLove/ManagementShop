<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả ID từ bảng carts và users
        $cartIDs = \DB::table('carts')->pluck('id');
        $userIDs = \DB::table('users')->pluck('id');
        $orders = [];

        for ($i = 0; $i < 10; $i++) {
            $orders[] = [
                'order_date' => now(),
                'total_amount' => rand(10000, 1000000), // Số tiền tổng đã tính giá giảm giá
                'status' => 'Pending', // Trạng thái mặc định
                'cart_id' => $cartIDs->random(), // Lấy ngẫu nhiên ID giỏ hàng
                'user_id' => $userIDs->random(), // Lấy ngẫu nhiên ID người dùng
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        \DB::table('orders')->insert($orders);
    }
}
