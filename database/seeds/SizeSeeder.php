<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('sizes')->insert([
            [
                'name' => 'All Size'
            ],
            [
                'name' => 'S'
            ],
            [
                'name' => 'M'
            ],
            [
                'name' => 'L'
            ],
            [
                'name' => 'XL'
            ],
        ]);
    }
}
