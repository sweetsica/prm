<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Lacta+
        DB::table('products')->insert([
            'name' =>'Lacta+',
            'link_product'=>'https://doppelherz.vn/san-pham/thuc-pham-bao-ve-suc-khoe-lacta/',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Lacta-front-01.png',
            'price' => '',
            'status' => '1',
        ]);
        DB::table('gifts')->insert([
            'id'=>'32',
            'name' =>'Phần quà: Lacta+',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Lacta-front-01.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'75',
            'status' => '1'
        ]);
        DB::table('promotions')->insert([
            'name' =>'Tích điểm Lacta+',
            'product_id'=>'30',
            'typeSale'=>'point',
            'valueSale'=>'4',
            'status' => '1'
        ]);

//        Conceptive Men
        DB::table('products')->insert([
            'name' =>'Conceptive Men',
            'link_product'=>'https://doppelherz.vn/san-pham/thuc-pham-bao-ve-suc-khoe-conceptive-women/',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Conceptive-Men-front-01.png',
            'price' => '',
            'status' => '1',
        ]);
        DB::table('gifts')->insert([
            'id'=>'33',
            'name' =>'Phần quà: Conceptive Men',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Conceptive-Men-front-01.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'370',
            'status' => '1'
        ]);
        DB::table('promotions')->insert([
            'name' =>'Tích điểm Conceptive Men',
            'product_id'=>'31',
            'typeSale'=>'point',
            'valueSale'=>'10',
            'status' => '1'
        ]);

//        Conceptive Women
        DB::table('products')->insert([
            'name' =>'Conceptive Women',
            'link_product'=>'https://doppelherz.vn/san-pham/thuc-pham-bao-ve-suc-khoe-conceptive-women/',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Conceptive-Women-front-01.png',
            'price' => '',
            'status' => '1',
        ]);
        DB::table('gifts')->insert([
            'id'=>'34',
            'name' =>'Phần quà: Conceptive Women',
            'image'=>'https://doppelherz.vn/wp-content/uploads/2023/02/Conceptive-Women-front-01.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'336',
            'status' => '1'
        ]);
        DB::table('promotions')->insert([
            'name' =>'Tích điểm Conceptive Women',
            'product_id'=>'32',
            'typeSale'=>'point',
            'valueSale'=>'10',
            'status' => '1'
        ]);
    }
}
