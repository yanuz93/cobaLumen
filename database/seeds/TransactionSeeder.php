<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('transactions')->insert([
            [
                'product_id' => '1',
                'quantity' => '30'
            ],
            [
                'product_id' => '2',
                'quantity' => '60'
            ],
            [
                'product_id' => '3',
                'quantity' => '25'
            ],
            [
                'product_id' => '4',
                'quantity' => '5'
            ],
            [
                'product_id' => '5',
                'quantity' => '30'
            ],
            [
                'product_id' => '6',
                'quantity' => '25'
            ],
            [
                'product_id' => '7',
                'quantity' => '21'
            ],
            [
                'product_id' => '8',
                'quantity' => '4'
            ],
            [
                'product_id' => '9',
                'quantity' => '1'
            ],
            [
                'product_id' => '10',
                'quantity' => '67'
            ],
            [
                'product_id' => '11',
                'quantity' => '6'
            ],
            [
                'product_id' => '12',
                'quantity' => '3'
            ],
            [
                'product_id' => '13',
                'quantity' => '12'
            ],
            [
                'product_id' => '14',
                'quantity' => '32'
            ],
            [
                'product_id' => '15',
                'quantity' => '54'
            ],
            [
                'product_id' => '16',
                'quantity' => '12'
            ],
            [
                'product_id' => '17',
                'quantity' => '30'
            ]
        ]);
    }
}
