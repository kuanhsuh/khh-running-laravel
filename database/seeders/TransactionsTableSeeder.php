<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'last_five_digit' => '12345',
                'transaction_date' => now(),
                'description' => 'First transaction',
                'confirmed' => false,
                'amount' => 1000,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_five_digit' => '67890',
                'transaction_date' => now(),
                'description' => 'Second transaction',
                'confirmed' => false,
                'amount' => 2000,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_five_digit' => '24680',
                'transaction_date' => now(),
                'description' => 'Third transaction',
                'confirmed' => false,
                'amount' => 3000,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_five_digit' => '12345',
                'transaction_date' => now(),
                'description' => 'First transaction',
                'confirmed' => false,
                'amount' => 1000,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_five_digit' => '67890',
                'transaction_date' => now(),
                'description' => 'Second transaction',
                'confirmed' => false,
                'amount' => 2000,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_five_digit' => '24680',
                'transaction_date' => now(),
                'description' => 'Third transaction',
                'confirmed' => false,
                'amount' => 3000,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}
