<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProductDetailSeeder');
        $this->call('SizeSeeder');
        $this->call('ProductSeeder');
        $this->call('TransactionSeeder');
    }
}
