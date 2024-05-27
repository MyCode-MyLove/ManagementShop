<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIDs = \DB::table('users')->pluck('id');
        $userstatus = [];

        for ($i = 0; $i < 8; $i++) {
            $userstatus[] = [
                'name' => 'Hoạt động',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => $userIDs->random(),
            ];
        }

        \DB::table('user_status')->insert($userstatus);
    }
}
