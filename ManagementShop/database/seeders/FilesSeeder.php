<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('files')->insert([
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011403-mau3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011403-mau2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/l/h/lhmn-phienbanmoi-tap6-364.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia-1_6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936134263504-qt.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_244718_1_4401.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935309503834.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia1_thuong_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
