<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('product_details')->insert([
            [
                'name' => 'Kaos',
                'type' => 'Lengan Panjang'
            ],
            [
                'name' => 'Kaos',
                'type' => 'Lengan Pendek'
            ],
            [
                'name' => 'Kemeja',
                'type' => 'Lengan Panjang'
            ],
            [
                'name' => 'Kemeja',
                'type' => 'Lengan Pendek'
            ],
            [
                'name' => 'Sweater',
                'type' => ''
            ],
        ]);
    }
}
