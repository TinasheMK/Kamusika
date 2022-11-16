<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
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
        //
        DB::table('products')->insert(
            [
            'shop_id'       => 2 ,
            'name'          =>'Shoe',
            'description'    =>Str::random(10),
            'full_specs'    =>Str::random(50),
            'price'         =>100,
            'cover_img'      =>Str::random(10),
            ],

        );
        DB::table('products')->insert(
            [
                'shop_id'       => 2 ,
                'name'          =>Str::random(5),
                'description'    =>Str::random(10),
                'full_specs'    =>Str::random(50),
                'price'         =>100,
                'cover_img'      =>Str::random(10),
             ]
        );
        DB::table('products')->insert(
            [
            'shop_id'       => 2 ,
            'name'          =>Str::random(5),
            'description'    =>Str::random(10),
            'full_specs'    =>Str::random(50),
            'price'         =>100,
            'cover_img'      =>Str::random(10),

             ],
        );
        DB::table('products')->insert(
            [
            'shop_id'       => 2 ,
            'name'          =>'Meat',
            'description'    =>Str::random(10),
            'full_specs'    =>Str::random(50),
            'price'         =>100,
            'cover_img'      =>Str::random(10),
             ]
        );
    }
}
