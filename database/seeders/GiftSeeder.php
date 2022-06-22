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
            'image'=>'iA7NxBb5TKuHD7jPd6Kf6TMBl74JdSw9Ef7KcIVd.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'339',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'2',
            'name' =>'Phần quà: A-Z Fizz',
            'image'=>'gOmllHMdRsV7YHfDgRhPu3HWwBz608jKbzH4kvEW.jpg',
            'typePromotion'=>'point',
            'valuePromotion'=>'78',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'3',
            'name' =>'Phần quà: Active Men Plus',
            'image'=>'9NOHTKkFw0CTo8RnvsJYOpM76fHzpetymP1uF2hd.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'491',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'4',
            'name' =>'Phần quà: Aktiv Meno',
            'image'=>'1TgCAkiXZGNTTeGIkRIs8pCZhcdC6eMwiPeIVeg7.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'266',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'5',
            'name' =>'Phần quà: Anti Stress',
            'image'=>'jKczXwCcINRp5sHIgdyICEAroPmARWtDugzDB6oK.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'329',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'6',
            'name' =>'Phần quà: Beauty Collagen',
            'image'=>'dAP5nL7xLdpPJ27rIhERUOOq1SE5PfhvcHYPJbv5.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'2700',
            'status' => '1',
        ]);

        DB::table('gifts')->insert([
            'id'=>'7',
            'name' =>'Phần quà: Belle Anti-aging',
            'image'=>'Lza8TuCxm1JgLzVCeqQhmOMcNtIj5sSdCgXekHUB.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'8',
            'name' =>'Phần quà: Belle Hairnakin',
            'image'=>'VzXaT92ee6RUMXQwYEQv4hNjSzxGvMMhOmlI7vKO.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'291',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'9',
            'name' =>'Phần quà: Coenzyme Q10',
            'image'=>'qKgaQJrtreTcHtwA9FbGp44aYvbUG5LubFVpZo73.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'10',
            'name' =>'Phần quà: Eye Vital',
            'image'=>'rJLlRNCyBAO0dYzNW7vD8JEctWOAxxtwqtXY1UIG.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'339',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'11',
            'name' =>'Phần quà: Ginkgo + Vitamin B + Choline',
            'image'=>'YvbqrrA0fziXHNYbNo6zSTbQPtQGFSaeqbE8Xs82.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'335',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'12',
            'name' =>'Phần quà: Haemo Vital',
            'image'=>'Ngb1b0pulGPbm0e5a3Sfo0ThjigCYjYeoQrwCGxk.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'13',
            'name' =>'Phần quà: Hair Plus',
            'image'=>'SuloyvtMrcTS7qUCXiGTjsQVlxphWeuyBbAfr2en.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'536',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'14',
            'name' =>'Phần quà: Joints ULTRA',
            'image'=>'6hHIOMQO0MH4mm1LxeRmpuzol8T5DaefizACNBjV.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'472',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'15',
            'name' =>'Phần quà: Kinder Active D3 Drops',
            'image'=>'17q2cB9XWC2F1TTOFsSKCF7iWZsG1rltS58Us0Aw.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'226',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'16',
            'name' =>'Phần quà: Kinder Calciovin Liquid',
            'image'=>'gSDoWGy4BrYN28OGMogN99GoqGOSRA4TlvvVAO2Z.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'450',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'17',
            'name' =>'Phần quà: Kinder Immune 150ml',
            'image'=>'7tJtMyDIyweQAKK0z2M0Kw1s8Hku9kOm37QCQAhR.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'389',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'18',
            'name' =>'Phần quà: Kinder Iron Drops',
            'image'=>'hbEEvU439i0kx1Z0BbxKG3gSrcdaVmKrDHb8WBds.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'293',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'19',
            'name' =>'Phần quà: Kinder Omega-3 Syrup',
            'image'=>'cYv3Zf8kVfBbGsB1IbaaWp6emRrEHjDXj7QfGTKn.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'478',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'20',
            'name' =>'Phần quà: Kinder Optima',
            'image'=>'QGm4Oz3BZIf6B7ipvS5JzJBLu6JoCA0kOhyzDRyD.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'305',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'21',
            'name' =>'Phần quà: Kinder Thymepect',
            'image'=>'FKsjEc2vzmvhyQxYOQXQFcgTP6aYmffNNAex2caC.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'216',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'22',
            'name' =>'Phần quà: Liver Complex',
            'image'=>'H0h31euXrpaIglgFVUyG6MeJFfZCRGRx5yjrs95l.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'23',
            'name' =>'Phần quà: Magnesium + Calcium + D3',
            'image'=>'QlGAa2P3uelNZrT09a6rjoEROUgVjRC6ggZQGT7D.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'24',
            'name' =>'Phần quà: Omega-3 + Folic axit + B6 + B12',
            'image'=>'tXxjDkCF9DryzGMzquqIkgNBgJlNC9ng22asWaxu.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'270',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'25',
            'name' =>'Phần quà: Prostacalm',
            'image'=>'ztAsbrwFVsyHYSikRM9W7pQnzdMX3Q5OrMhPA4UL.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'349',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'26',
            'name' =>'Phần quà: Vital Pregna',
            'image'=>'OHHhijWqX45dIR9GsHLYciXmi1VRRMPHNhfz6jcG.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'324',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'27',
            'name' =>'Phần quà: Vitamin D3 + K2',
            'image'=>'3g7LBmECb0474b7JtYeCtHPZtl93hfqY8h0YwHow.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'369',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'28',
            'name' =>'Phần quà: Zincodin',
            'image'=>'Qx841shWvixQRbO5miWgdIIy5Cfmhn9kYNa2Y6eA.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'215',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'29',
            'name' =>'Phần quà: Bộ gồm 2 quyển tập tô cho bé',
            'image'=>'w99IJljGwRjecP4jOyac0IJsJSiOPFsiwp8WZpct.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'30',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'30',
            'name' =>'Phần quà: Cẩm nang phụ nữ',
            'image'=>'lZeFCULmoWfNFEr87pRnBJurwJXRxwWz2WlkpAgQ.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'50',
            'status' => '1'
        ]);

        DB::table('gifts')->insert([
            'id'=>'31',
            'name' =>'Phần quà: Túi đựng đồ đa năng',
            'image'=>'7eGwdh7U1SGJD2h9fPuAJcneYzxg7KShDheEYMO2.png',
            'typePromotion'=>'point',
            'valuePromotion'=>'100',
            'status' => '1'
        ]);
    }
}
