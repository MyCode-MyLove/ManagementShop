<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderIDs = \DB::table('orders')->pluck('id');
        $paymentmethodIDs = \DB::table('payment_method')->pluck('id');
        $paymenttransaction = [];

        for ($i = 0; $i < 10; $i++) {
            $paymenttransaction[] = [
                'payment_date' => now(),
                'order_id' => $orderIDs->random(),
                'payment_method_id' => $paymentmethodIDs->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        \DB::table('payment_transaction')->insert($paymenttransaction);
    }
}
