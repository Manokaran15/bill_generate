<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denominations')->insert([
            'number_of_500' => '100',
            'number_of_50'  => '150',
            'number_of_20'  => '200',
            'number_of_10'  => '300',
            'number_of_5'   => '350',
            'number_of_2'   => '400',
            'number_of_1'   => '500'
        ]);
    }
}
