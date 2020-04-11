<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('products')->insert([
            [
                'product_detail_id' => '1',
                'size_id' => '2',
                'price' => '25000'
            ],
            [
                'product_detail_id' => '1',
                'size_id' => '3',
                'price' => '25000'
            ],
            [
                'product_detail_id' => '1',
                'size_id' => '4',
                'price' => '30000'
            ],
            [
                'product_detail_id' => '1',
                'size_id' => '5',
                'price' => '35000'
            ],
            [
                'product_detail_id' => '2',
                'size_id' => '2',
                'price' => '35000'
            ],
            [
                'product_detail_id' => '2',
                'size_id' => '3',
                'price' => '35000'
            ],
            [
                'product_detail_id' => '2',
                'size_id' => '4',
                'price' => '40000'
            ],
            [
                'product_detail_id' => '2',
                'size_id' => '5',
                'price' => '45000'
            ],
            [
                'product_detail_id' => '3',
                'size_id' => '2',
                'price' => '40000'
            ],
            [
                'product_detail_id' => '3',
                'size_id' => '3',
                'price' => '40000'
            ],
            [
                'product_detail_id' => '3',
                'size_id' => '4',
                'price' => '55000'
            ],
            [
                'product_detail_id' => '3',
                'size_id' => '5',
                'price' => '60000'
            ],
            [
                'product_detail_id' => '4',
                'size_id' => '2',
                'price' => '45000'
            ],
            [
                'product_detail_id' => '4',
                'size_id' => '3',
                'price' => '45000'
            ],
            [
                'product_detail_id' => '4',
                'size_id' => '4',
                'price' => '60000'
            ],
            [
                'product_detail_id' => '4',
                'size_id' => '5',
                'price' => '65000'
            ],
            [
                'product_detail_id' => '5',
                'size_id' => '1',
                'price' => '90000'
            ],

        ]);
    }
}
