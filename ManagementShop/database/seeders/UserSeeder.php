<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //thêm vào (có thể bỏ nếu trước DB có dấu \)
use Illuminate\Support\Facades\Hash; //mã hóa password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Admin",
                "user_name" => "admin",
                "user_email" => "admin@gmail.com", // Corrected column name
                "user_password" => Hash::make("admin123"), // Corrected column name
                "phone_number" => "09876543212",
                "user_address" => "sai gon",
                "user_type" => 1,
            ],
            [
                "name" => "Admin2",
                "user_name" => "minmin",
                "user_email" => "admin2@gmail.com", // Corrected column name
                "user_password" => Hash::make("admin123"), // Corrected column name
                "phone_number" => "09876543219",
                "user_address" => "vinh long",
                "user_type" => 1,
            ],
            [
                "name" => "Customer 1",
                "user_name" => "hoa hoa",
                "user_email" => "customer1@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "0123456789",
                "user_address" => "Hanoi",
                "user_type" => 2,
            ],
            [
                "name" => "Customer 2",
                "user_name" => "quang",
                "user_email" => "customer2@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "0123459999",
                "user_address" => "HCM City",
                "user_type" => 2,
            ],
            [
                "name" => "Customer 3",
                "user_name" => "tan",
                "user_email" => "customer3@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "0123459998",
                "user_address" => "HCM City",
                "user_type" => 2,
            ]
        ]);
        // Thêm người dùng khách hàng chưa đăng ký
        $unregisteredUsers = [
            [
                "name" => "Unregistered Customer 1",
                "user_name" => "tantan",
                "user_email" => "unregistered1@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "0989878012",
                "user_address" => "Address 1",
                "user_type" => 3,
            ],
            [
                "name" => "Unregistered Customer 2",
                "user_name" => "tanha",
                "user_email" => "unregistered2@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "0123898989",
                "user_address" => "Address 2",
                "user_type" => 3,
            ],
            [
                "name" => "Unregistered Customer 3",
                "user_name" => "thuy",
                "user_email" => "unregistered3@example.com",
                "user_password" => Hash::make("customer123"),
                "phone_number" => "012132314",
                "user_address" => "Address 3",
                "user_type" => 3,
            ],
        ];
        foreach ($unregisteredUsers as $user) {
            $userId = DB::table('users')->insertGetId($user);
            // Hiển thị ID của người dùng chưa đăng ký
            echo "User created with ID: $userId\n";
        }
    }
}
