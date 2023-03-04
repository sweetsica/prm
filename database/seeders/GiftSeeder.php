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
//        DB::table('gifts')->insert([
//            'id'=>'1',
//            'name' =>'Phần quà: A-Z Depot',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/AZD-front_1-01-1.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'339',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'2',
//            'name' =>'Phần quà: A-Z Fizz',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IMAGE_0048_90728767_A_Z_BRAUSE_13er_weisser-Deckel_VN.jpg',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'78',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'3',
//            'name' =>'Phần quà: Active Men Plus',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ACMEN-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'491',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'4',
//            'name' =>'Phần quà: Aktiv Meno',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/04/AkMeno-20v-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'266',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'5',
//            'name' =>'Phần quà: Anti Stress',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ANTS-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'329',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'6',
//            'name' =>'Phần quà: Beauty Collagen',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/BECO30-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'2700',
//            'status' => '1',
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'7',
//            'name' =>'Phần quà: Belle Anti-aging',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ATAG-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'324',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'8',
//            'name' =>'Phần quà: Belle Hairnakin',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAIRNAKIN-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'291',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'9',
//            'name' =>'Phần quà: Coenzyme Q10',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/COQ10-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'324',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'10',
//            'name' =>'Phần quà: Eye Vital',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/EVIT-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'339',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'11',
//            'name' =>'Phần quà: Ginkgo + Vitamin B + Choline',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/Ginkgo-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'335',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'12',
//            'name' =>'Phần quà: Haemo Vital',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAEMO-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'349',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'13',
//            'name' =>'Phần quà: Hair Plus',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAIR-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'536',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'14',
//            'name' =>'Phần quà: Joints ULTRA',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/11/Joints-ULTRA-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'472',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'15',
//            'name' =>'Phần quà: Kinder Active D3 Drops',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/D3DR-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'226',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'16',
//            'name' =>'Phần quà: Kinder Calciovin Liquid',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/CALCI-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'450',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'17',
//            'name' =>'Phần quà: Kinder Immune 150ml',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IMMU-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'389',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'18',
//            'name' =>'Phần quà: Kinder Iron Drops',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IRDR-front1-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'293',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'19',
//            'name' =>'Phần quà: Kinder Omega-3 Syrup',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OMG3s-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'478',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'20',
//            'name' =>'Phần quà: Kinder Optima',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OTM-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'305',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'21',
//            'name' =>'Phần quà: Kinder Thymepect',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/THYM-front-01-1.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'216',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'22',
//            'name' =>'Phần quà: Liver Complex',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/LICO-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'349',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'23',
//            'name' =>'Phần quà: Magnesium + Calcium + D3',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/MGCAD3-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'324',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'24',
//            'name' =>'Phần quà: Omega-3 + Folic axit + B6 + B12',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OMGv-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'270',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'25',
//            'name' =>'Phần quà: Prostacalm',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/PROS-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'349',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'26',
//            'name' =>'Phần quà: Vital Pregna',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/VITAL-front-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'324',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'27',
//            'name' =>'Phần quà: Vitamin D3 + K2',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/09/K2-D3-web-2-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'369',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'28',
//            'name' =>'Phần quà: Zincodin',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/zincodin-front.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'215',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'29',
//            'name' =>'Phần quà: Bộ gồm 2 quyển tập tô cho bé',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/09/Tap-to-cho-be-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'30',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'30',
//            'name' =>'Phần quà: Cẩm nang phụ nữ',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/09/Cam-nang-phu-nu-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'50',
//            'status' => '1'
//        ]);
//
//        DB::table('gifts')->insert([
//            'id'=>'31',
//            'name' =>'Phần quà: Túi đựng đồ đa năng',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/09/Tui-dung-my-pham-01.png',
//            'typePromotion'=>'point',
//            'valuePromotion'=>'100',
//            'status' => '1'
//        ]);
    }
}
