<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(
            [
                'name'  => 'Clothing',
                'description'  => 'Silence',
                'featured'  => true,
                'menu'  => true,
            ]

        );
        DB::table('categories')->insert(
            [
                'name'  => 'Personal Gadjets',
                'description'  => 'Silence',
                'featured'  => false,
                'menu'  => false,
            ]
        );

        DB::table('categories')->insert(
            [
                'name'  => 'Cosmetics',
                'description'  => 'Silence',

                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Cars',
                'description'  => 'Silence',
                'featured'  => true,
                'menu'  => true,
            ]

        );
        DB::table('categories')->insert(
            [
                'name'  => 'Stationery',
                'description'  => 'Silence',
                'featured'  => false,
                'menu'  => false,
            ]
        );

        DB::table('categories')->insert(
            [
                'name'  => 'Hardware & Electronics',
                'description'  => 'Silence',

                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Home Furniture & Tools',
                'description'  => 'Silence',
                'featured'  => true,
                'menu'  => true,
            ]

        );







        DB::table('categories')->insert(
            [
                'name'  => 'Shoes',
                'description'  => 'Silence',
                'featured'  => false,
                'menu'  => false,
            ]
        );

        DB::table('categories')->insert(
            [
                'name'  => 'Baby Wear',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Clothing Material',
                'description'  => 'Silence',
                'featured'  => true,
                'menu'  => true,
            ]

        );
        DB::table('categories')->insert(
            [
                'name'  => 'Phones',
                'description'  => 'Silence',
                'featured'  => false,
                'menu'  => false,
            ]
        );

        DB::table('categories')->insert(
            [
                'name'  => 'Laptops',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Accessories',
                'description'  => 'Silence',
                'featured'  => true,
                'menu'  => true,
            ]

        );
        DB::table('categories')->insert(
            [
                'name'  => 'Hair Products',
                'description'  => 'Silence',
                'featured'  => false,
                'menu'  => false,
            ]
        );

        DB::table('categories')->insert(
            [
                'name'  => 'Toiletries',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Honda',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Toyota',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Mercedes Benz',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Nissan',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Books',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Pens',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Tools',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Components',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Parts',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Safety Wear',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Gardening',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Furniture',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Appliances',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Other',
                'description'  => 'Silence',

                'menu'  => false,
            ]
        );
        DB::table('categories')->insert(
            [
                'name'  => 'Other',
                'description'  => 'Silence',
                'parent_id'  => 1,
                'menu'  => false,
            ]
        );

    }
}
