<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm A-Z Depot',
//            'product_id'=>'1',
//            'typeSale'=>'point',
//            'valueSale'=>'33',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm A-Z Fizz',
//            'product_id'=>'2',
//            'typeSale'=>'point',
//            'valueSale'=>'7',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Active Men Plus',
//            'product_id'=>'3',
//            'typeSale'=>'point',
//            'valueSale'=>'49',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Aktiv Meno',
//            'product_id'=>'4',
//            'typeSale'=>'point',
//            'valueSale'=>'26',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Anti Stress',
//            'product_id'=>'5',
//            'typeSale'=>'point',
//            'valueSale'=>'32',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Beauty Collagen',
//            'product_id'=>'6',
//            'typeSale'=>'point',
//            'valueSale'=>'270',
//            'status' => '1',
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Belle Anti-aging',
//            'product_id'=>'7',
//            'typeSale'=>'point',
//            'valueSale'=>'32',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Belle Hairnakin',
//            'product_id'=>'8',
//            'typeSale'=>'point',
//            'valueSale'=>'29',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Coenzyme Q10',
//            'product_id'=>'9',
//            'typeSale'=>'point',
//            'valueSale'=>'32',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Eye Vital',
//            'product_id'=>'10',
//            'typeSale'=>'point',
//            'valueSale'=>'33',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Ginkgo + Vitamin B + Choline',
//            'product_id'=>'11',
//            'typeSale'=>'point',
//            'valueSale'=>'33',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Haemo Vital',
//            'product_id'=>'12',
//            'typeSale'=>'point',
//            'valueSale'=>'34',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Hair Plus',
//            'product_id'=>'13',
//            'typeSale'=>'point',
//            'valueSale'=>'53',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Joints ULTRA',
//            'product_id'=>'14',
//            'typeSale'=>'point',
//            'valueSale'=>'47',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Active D3 Drops',
//            'product_id'=>'15',
//            'typeSale'=>'point',
//            'valueSale'=>'22',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Calciovin Liquid',
//            'product_id'=>'16',
//            'typeSale'=>'point',
//            'valueSale'=>'45',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Immune 150ml',
//            'product_id'=>'17',
//            'typeSale'=>'point',
//            'valueSale'=>'38',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Iron Drops',
//            'product_id'=>'18',
//            'typeSale'=>'point',
//            'valueSale'=>'29',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Omega-3 Syrup',
//            'product_id'=>'19',
//            'typeSale'=>'point',
//            'valueSale'=>'47',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Optima',
//            'product_id'=>'20',
//            'typeSale'=>'point',
//            'valueSale'=>'30',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Kinder Thymepect',
//            'product_id'=>'21',
//            'typeSale'=>'point',
//            'valueSale'=>'21',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Liver Complex',
//            'product_id'=>'22',
//            'typeSale'=>'point',
//            'valueSale'=>'34',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Magnesium + Calcium + D3',
//            'product_id'=>'23',
//            'typeSale'=>'point',
//            'valueSale'=>'32',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Omega-3 + Folic axit + B6 + B12',
//            'product_id'=>'24',
//            'typeSale'=>'point',
//            'valueSale'=>'27',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Prostacalm',
//            'product_id'=>'25',
//            'typeSale'=>'point',
//            'valueSale'=>'34',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Vital Pregna',
//            'product_id'=>'26',
//            'typeSale'=>'point',
//            'valueSale'=>'32',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Vitamin D3 + K2',
//            'product_id'=>'27',
//            'typeSale'=>'point',
//            'valueSale'=>'36',
//            'status' => '1'
//        ]);
//
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Zincodin',
//            'product_id'=>'28',
//            'typeSale'=>'point',
//            'valueSale'=>'21',
//            'status' => '1'
//        ]);
//        DB::table('promotions')->insert([
//            'name' =>'Tích điểm Collagen Max 30 ống',
//            'product_id'=>'28',
//            'typeSale'=>'point',
//            'valueSale'=>'21',
//            'status' => '1'
//        ]);
    }
}
