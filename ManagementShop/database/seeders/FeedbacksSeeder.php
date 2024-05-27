<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả ID từ bảng carts và users
        $productIDs = \DB::table('products')->pluck('id');
        $userIDs = \DB::table('users')->pluck('id');
        $feedbacks = [];

        for ($i = 0; $i < 10; $i++) {
            $feedbacks[] = [
                'create_date' => now(),
                'comment'=>'Good',
                'rating'=>1,
                'countLike' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'product_id' => $productIDs->random(),
                'user_id' => $userIDs->random(),
            ];
        }

        \DB::table('feedbacks')->insert($feedbacks);
    }
}
