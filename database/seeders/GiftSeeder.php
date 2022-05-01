<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert([
            'id'=>'1',
            'name' =>'Phần quà: A-Z Depot',
            'typePromotion'=>'point',
            'valuePromotion'=>'339',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'2',
            'name' =>'Phần quà: A-Z Fizz',
            'typePromotion'=>'point',
            'valuePromotion'=>'78',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'3',
            'name' =>'Phần quà: Active Men Plus',
            'typePromotion'=>'point',
            'valuePromotion'=>'491',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'4',
            'name' =>'Phần quà: Aktiv Meno',
            'typePromotion'=>'point',
            'valuePromotion'=>'266',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'5',
            'name' =>'Phần quà: Anti Stress',
            'typePromotion'=>'point',
            'valuePromotion'=>'329',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'6',
            'name' =>'Phần quà: Beauty Collagen',
            'typePromotion'=>'point',
            'valuePromotion'=>'2700',
            'status' => '1',
        ]);

        DB::table('gifts')->insert([
            'id'=>'7',
            'name' =>'Phần quà: Belle Anti-aging',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'8',
            'name' =>'Phần quà: Belle Hairnakin',
            'typePromotion'=>'point',
            'valuePromotion'=>'291',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'9',
            'name' =>'Phần quà: Coenzyme Q10',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'10',
            'name' =>'Phần quà: Eye Vital',
            'typePromotion'=>'point',
            'valuePromotion'=>'339',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'11',
            'name' =>'Phần quà: Ginkgo + Vitamin B + Choline',
            'typePromotion'=>'point',
            'valuePromotion'=>'335',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'12',
            'name' =>'Phần quà: Haemo Vital',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'13',
            'name' =>'Phần quà: Hair Plus',
            'typePromotion'=>'point',
            'valuePromotion'=>'536',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'14',
            'name' =>'Phần quà: Joints ULTRA',
            'typePromotion'=>'point',
            'valuePromotion'=>'472',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'15',
            'name' =>'Phần quà: Kinder Active D3 Drops',
            'typePromotion'=>'point',
            'valuePromotion'=>'226',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'16',
            'name' =>'Phần quà: Kinder Calciovin Liquid',
            'typePromotion'=>'point',
            'valuePromotion'=>'450',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'17',
            'name' =>'Phần quà: Kinder Immune 150ml',
            'typePromotion'=>'point',
            'valuePromotion'=>'389',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'18',
            'name' =>'Phần quà: Kinder Iron Drops',
            'typePromotion'=>'point',
            'valuePromotion'=>'293',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'19',
            'name' =>'Phần quà: Kinder Omega-3 Syrup',
            'typePromotion'=>'point',
            'valuePromotion'=>'478',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'20',
            'name' =>'Phần quà: Kinder Optima',
            'typePromotion'=>'point',
            'valuePromotion'=>'305',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'21',
            'name' =>'Phần quà: Kinder Thymepect',
            'typePromotion'=>'point',
            'valuePromotion'=>'216',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'22',
            'name' =>'Phần quà: Liver Complex',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'23',
            'name' =>'Phần quà: Magnesium + Calcium + D3',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'24',
            'name' =>'Phần quà: Omega-3 + Folic axit + B6 + B12',
            'typePromotion'=>'point',
            'valuePromotion'=>'270',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'25',
            'name' =>'Phần quà: Prostacalm',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'26',
            'name' =>'Phần quà: Vital Pregna',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'27',
            'name' =>'Phần quà: Vitamin D3 + K2',
            'typePromotion'=>'point',
            'valuePromotion'=>'369',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'28',
            'name' =>'Phần quà: Zincodin',
            'typePromotion'=>'point',
            'valuePromotion'=>'215',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'29',
            'name' =>'Phần quà: Bộ gồm 2 quyển tập tô cho bé',
            'typePromotion'=>'point',
            'valuePromotion'=>'30',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'30',
            'name' =>'Phần quà: Cẩm nang phụ nữ',
            'typePromotion'=>'point',
            'valuePromotion'=>'50',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'31',
            'name' =>'Phần quà: Túi đựng đồ đa năng',
            'typePromotion'=>'point',
            'valuePromotion'=>'100',
            'status' => '1'
        ]);
    }
}
