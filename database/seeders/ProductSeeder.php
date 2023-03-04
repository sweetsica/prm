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
//        DB::table('products')->insert([
//            'name' =>'A-Z Depot',
//            'link_product'=>'https://doppelherz.vn/san-pham/a-z-depot-30-vien/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/AZD-front_1-01-1.png',
//            'price' => '339000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'A-Z Fizz',
//            'link_product'=>'https://doppelherz.vn/san-pham/a-z-fizz/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IMAGE_0048_90728767_A_Z_BRAUSE_13er_weisser-Deckel_VN.jpg',
//            'price' => '77000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Active Men Plus',
//            'link_product'=>'https://doppelherz.vn/san-pham/active-men-plus/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ACMEN-front-01.png',
//            'price' => '491000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Aktiv Meno',
//            'link_product'=>'https://doppelherz.vn/san-pham/aktiv-meno-20-vien/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/04/AkMeno-20v-front-01.png',
//            'price' => '266000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Anti Stress',
//            'link_product'=>'https://doppelherz.vn/san-pham/anti-stress/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ANTS-front-01.png',
//            'price' => '329000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Beauty Collagen',
//            'link_product'=>'https://doppelherz.vn/san-pham/beauty-collagen-30-ong/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/BECO30-front-01.png',
//            'price' => '2700000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Belle Anti-aging',
//            'link_product'=>'https://doppelherz.vn/san-pham/belle-anti-aging/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/ATAG-front-01.png',
//            'price' => '324000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Belle Hairnakin',
//            'link_product'=>'https://doppelherz.vn/san-pham/belle-hairnakin/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAIRNAKIN-front-01.png',
//            'price' => '291000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Coenzyme Q10',
//            'link_product'=>'https://doppelherz.vn/san-pham/coenzyme-q10-30-vien/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/COQ10-front-01.png',
//            'price' => '324000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Eye Vital Capsules',
//            'link_product'=>'https://doppelherz.vn/san-pham/eye-vital-capsules-30-vien/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/EVIT-front-01.png',
//            'price' => '339000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Ginkgo + Vitamin B + Choline',
//            'link_product'=>'https://doppelherz.vn/san-pham/ginkgo-vitamin-b-choline/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/Ginkgo-front-01.png',
//            'price' => '335000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Haemo Vital',
//            'link_product'=>'https://doppelherz.vn/san-pham/haemo-vital/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAEMO-front-01.png',
//            'price' => '349000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Hair Plus',
//            'link_product'=>'https://doppelherz.vn/san-pham/hair-plus/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/HAIR-front-01.png',
//            'price' => '536000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Joints ULTRA',
//            'link_product'=>'https://doppelherz.vn/san-pham/joints-ultra/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/11/Joints-ULTRA-front-01.png',
//            'price' => '472000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Active D3 Drops',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-active-d3-drops/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/D3DR-front-01.png',
//            'price' => '226000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Calciovin Liquid',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-calciovin-liquid/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/CALCI-front-01.png',
//            'price' => '450000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Immune 150ml',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-immune-250ml/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IMMU-front-01.png',
//            'price' => '389000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Iron Drops',
//            'link_product'=>'https://doppelherz.vn/san-pham/iron-drops/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/IRDR-front1-01.png',
//            'price' => '293000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Omega-3 Syrup',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-omega-3-syrup/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OMG3s-front-01.png',
//            'price' => '478000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Optima',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-optima/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OTM-front-01.png',
//            'price' => '305000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Kinder Thymepect',
//            'link_product'=>'https://doppelherz.vn/san-pham/kinder-thymepect/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/THYM-front-01-1.png',
//            'price' => '216000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Liver Complex',
//            'link_product'=>'https://doppelherz.vn/san-pham/liver-complex/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/LICO-front-01.png',
//            'price' => '349000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Magnesium + Calcium + D3',
//            'link_product'=>'https://doppelherz.vn/san-pham/magnesium-calcium-d3-30-vien/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/MGCAD3-front-01.png',
//            'price' => '324000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Omega-3 + Folic axit + B6 + B12',
//            'link_product'=>'https://doppelherz.vn/san-pham/omega-3-folic-axit-b6-b12/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/OMGv-front-01.png',
//            'price' => '270000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Prostacalm',
//            'link_product'=>'https://doppelherz.vn/san-pham/prostacalm/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/PROS-front-01.png',
//            'price' => '349000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Vital Pregna',
//            'link_product'=>'https://doppelherz.vn/san-pham/vital-pregna/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2020/12/VITAL-front-01.png',
//            'price' => '324000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Vitamin D3 + K2',
//            'link_product'=>'https://doppelherz.vn/san-pham/vitamin-d3-k2/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2021/09/K2-D3-web-2-01.png',
//            'price' => '369000',
//            'status' => '1',
//        ]);
//
//
//        DB::table('products')->insert([
//            'name' =>'Zincodin',
//            'link_product'=>'https://doppelherz.vn/san-pham/zincodin/',
//            'image'=>'https://doppelherz.vn/wp-content/uploads/2022/03/zincodin-front.png',
//            'price' => '215000',
//            'status' => '1',
//        ]);
    }
}
