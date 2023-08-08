<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;
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

        $json = Storage::disk('local')->get('/app/json/amrodproducts.json');
        $products = json_decode($json, true);

        foreach ($products as $product) {
            DB::table('products')->insert(
                [
                'shop_id'       => 1 ,
                'name'          =>$product['title'],
                'description'    =>Str::random(10),
                'full_specs'    =>Str::random(50),
                'price'         =>100,
                'cover_img'      =>Str::random(10),
                ],

            );
        }

        // Movie::query()->updateOrCreate([
        //     'title' => $movie['title'],
        //     'id_imdb' => $movie['id_imdb']
        // ]);





    }
}
