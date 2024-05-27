<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy danh sách ID của 20 sản phẩm và 10 files
        $productIds = range(1, 20);
        $fileIds = range(1, 10);

        // Chèn thông tin vào bảng 'product_files'
        foreach ($productIds as $productId) {
            foreach ($fileIds as $fileId) {
                \DB::table('product_files')->insert([
                    'product_id' => $productId,
                    'file_id' => $fileId,
                ]);
            }
        }
    }
}
