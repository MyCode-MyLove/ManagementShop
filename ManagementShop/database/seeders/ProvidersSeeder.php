<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('providers')->insert([
            [
                'name' => 'Provider 1',
                'category_id' => 1,
            ],
            [
                'name' => 'Provider 2',
                'category_id' => 2,
            ],
            [
                'name' => 'Provider 3',
                'category_id' => 3,
            ],
            [
                'name' => 'Provider 4',
                'category_id' => 4,
            ],
            [
                'name' => 'Provider 5',
                'category_id' => 5,
            ],
            [
                'name' => 'Provider 6',
                'category_id' => 6,
            ],
            [
                'name' => 'Provider 7',
                'category_id' => 1,
            ],
            [
                'name' => 'Provider 8',
                'category_id' => 2,
            ],
            [
                'name' => 'Provider 9',
                'category_id' => 3,
            ],
            [
                'name' => 'Provider 10',
                'category_id' => 4,
            ],
        ]);
    }
}
