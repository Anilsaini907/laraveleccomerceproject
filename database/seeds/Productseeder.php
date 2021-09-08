<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
              ['name'=>'LG mobile',
              'price'=>'12000',
              'description'=>'4G mobile with 4gb RAM and lowest mobile range',
              'category'=>'mobile',
              'gallery'=>'https://cdn1.smartprix.com/rx-iRnL8maCk-w1200-h1200/lg-g4-beat.jpg',],

              ['name'=>'LCD TV',
              'price'=>'16000',
              'description'=>'Led TV with 4gb RAM and lowest  range',
              'category'=>'TV',
              'gallery'=>'https://cdn1.smartprix.com/rx-iRnL8maCk-w1200-h1200/lg-g4-beat.jpg',],

              ['name'=>'Fridge',
              'price'=>'18000',
              'description'=>'190 Litre lowest  range',
              'category'=>'Refrigrator',
              'gallery'=>'https://cdn1.smartprix.com/rx-iRnL8maCk-w1200-h1200/lg-g4-beat.jpg',]

        ]);
    }
}
