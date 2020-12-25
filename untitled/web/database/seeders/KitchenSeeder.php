<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('kitchens')->insert([
            'name'=>'KFC',
            'address'=>'4142 SW Testing Way',
            'city'=>'Almaty',
            'state' => 'FL',
            'hours'=> '9:00',
            'latitude'=>28.452763,
            'longitude'=>-81.412228,
            'price_for_one'=>1500,
            'rating'=> 8,
            'description'=>'1233221313313 1dw121e21d1',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        ]);

        DB::table('kitchens')->insert([
            'name'=>'Burger KING',
            'address'=>'2112 SW Testing Way',
            'city'=>'Almaty',
            'state' => 'FL',
            'hours'=> '9:00',
            'latitude'=>28.142763,
            'longitude'=>-81.142228,
            'price_for_one'=>1500,
            'rating'=> 8,
            'description'=>'1233221313313 1dw121e21d1',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        ]);  DB::table('kitchens')->insert([
        'name'=>'COFFEE BOOM',
        'address'=>'22222 SW Testing Way',
        'city'=>'Almaty',
        'state' => 'FL',
        'hours'=> '9:00',
        'latitude'=>28.882763,
        'longitude'=>-81.812228,
        'price_for_one'=>1500,
        'rating'=> 8,
        'description'=>'1233221313313 1dw121e21d1',
        'created_at' =>date('Y-m-d H:i:s'),
        'updated_at' =>date('Y-m-d H:i:s'),

    ]);

        //
    }
}
