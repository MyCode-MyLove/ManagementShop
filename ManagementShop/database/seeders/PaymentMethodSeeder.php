<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentmethod = [];

        for ($i = 0; $i < 10; $i++) {
            $paymentmethod[] = [
                'payment_number' => rand(10000, 1000000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        \DB::table('payment_method')->insert($paymentmethod);
    }
}
