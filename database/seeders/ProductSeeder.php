<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            'name' =>'A-Z Depot',
            'link_product'=>'',
            'price' => '339000',
        ]);

        DB::table('products')->insert([
            'name' =>'A-Z Fizz',
            'link_product'=>'',
            'price' => '78000',
        ]);

        DB::table('products')->insert([
            'name' =>'Active Men Plus',
            'link_product'=>'',
            'price' => '491000',
        ]);

        DB::table('products')->insert([
            'name' =>'Aktiv Meno',
            'link_product'=>'',
            'price' => '266000',
        ]);

        DB::table('products')->insert([
            'name' =>'Anti Stress',
            'link_product'=>'',
            'price' => '329000',
        ]);

        DB::table('products')->insert([
            'name' =>'Beauty Collagen',
            'link_product'=>'',
            'price' => '2700000',
        ]);

        DB::table('products')->insert([
            'name' =>'Belle Anti-aging',
            'link_product'=>'',
            'price' => '324000',
        ]);

        DB::table('products')->insert([
            'name' =>'Belle Hairnakin',
            'link_product'=>'',
            'price' => '291000',
        ]);

        DB::table('products')->insert([
            'name' =>'Coenzyme Q10',
            'link_product'=>'',
            'price' => '324000',
        ]);

        DB::table('products')->insert([
            'name' =>'Eye Vital',
            'link_product'=>'',
            'price' => '339000',
        ]);

        DB::table('products')->insert([
            'name' =>'Ginkgo + Vitamin B + Choline',
            'link_product'=>'',
            'price' => '335000',
        ]);

        DB::table('products')->insert([
            'name' =>'Haemo Vital',
            'link_product'=>'',
            'price' => '349000',
        ]);

        DB::table('products')->insert([
            'name' =>'Hair Plus',
            'link_product'=>'',
            'price' => '536000',
        ]);

        DB::table('products')->insert([
            'name' =>'Joints ULTRA',
            'link_product'=>'',
            'price' => '472000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Active D3 Drops',
            'link_product'=>'',
            'price' => '226000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Calciovin Liquid',
            'link_product'=>'',
            'price' => '450000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Immune 150ml',
            'link_product'=>'',
            'price' => '389000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Iron Drops',
            'link_product'=>'',
            'price' => '293000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Omega-3 Syrup',
            'link_product'=>'',
            'price' => '478000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Optima',
            'link_product'=>'',
            'price' => '305000',
        ]);

        DB::table('products')->insert([
            'name' =>'Kinder Thymepect',
            'link_product'=>'',
            'price' => '216000',
        ]);

        DB::table('products')->insert([
            'name' =>'Liver Complex',
            'link_product'=>'',
            'price' => '349000',
        ]);

        DB::table('products')->insert([
            'name' =>'Magnesium + Calcium + D3',
            'link_product'=>'',
            'price' => '324000',
        ]);

        DB::table('products')->insert([
            'name' =>'Omega-3 + Folic axit + B6 + B12',
            'link_product'=>'',
            'price' => '270000',
        ]);

        DB::table('products')->insert([
            'name' =>'Prostacalm',
            'link_product'=>'',
            'price' => '349000',
        ]);

        DB::table('products')->insert([
            'name' =>'Vital Pregna',
            'link_product'=>'',
            'price' => '324000',
        ]);

        DB::table('products')->insert([
            'name' =>'Vitamin D3 + K2',
            'link_product'=>'',
            'price' => '369000',
        ]);

        DB::table('products')->insert([
            'name' =>'Zincodin',
            'link_product'=>'',
            'price' => '215000',
        ]);
    }
}
