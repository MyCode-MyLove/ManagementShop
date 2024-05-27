<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //lấy tất cả ID từ bảng người dùng
        $userID = \DB::table("users")->pluck("id");
        //lấy tất cả ID từ bảng sản phẩm
        $proID = \DB::table("products")->pluck("id");
        for($i = 0; $i < 10; $i++){
            $userid = $userID-> random(); //lấy ngẫu nhiên 10 id người dùng
            $proid = $proID-> random();
            $totalAmount = rand(10000, 1000000); //tổng số tiền

            \DB::table("carts")->insert([
                'user_id' => $userid,
                'product_id' => $proid,
                'total_amount' => $totalAmount,
                'delete_flag' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
