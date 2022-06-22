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
            'link_product'=>'https://doppelherz.vn/san-pham/a-z-depot-30-vien/',
            'image'=>'iA7NxBb5TKuHD7jPd6Kf6TMBl74JdSw9Ef7KcIVd.png',
            'price' => '339000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'A-Z Fizz',
            'link_product'=>'https://doppelherz.vn/san-pham/a-z-fizz/',
            'image'=>'5fqq4jz0e7hfEvyTzcYxwGiWvjUQLoCvYhKMQE7v.jpg',
            'price' => '77000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Active Men Plus',
            'link_product'=>'https://doppelherz.vn/san-pham/active-men-plus/',
            'image'=>'4AB55StQuhRBgFMkYdk8OE3ott0cC8OBwEBs1ycP.png',
            'price' => '491000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Aktiv Meno',
            'link_product'=>'https://doppelherz.vn/san-pham/aktiv-meno-20-vien/',
            'image'=>'nYYCYaZ5eHL0TXtRqkNERLISG3VGCQ0TZHk7wB1M.png',
            'price' => '266000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Anti Stress',
            'link_product'=>'https://doppelherz.vn/san-pham/anti-stress/',
            'image'=>'nxKAY3nO7DhIQYzvBRux09hFasLENbuVu7E3POxl.png',
            'price' => '329000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Beauty Collagen',
            'link_product'=>'https://doppelherz.vn/san-pham/beauty-collagen-30-ong/',
            'image'=>'E776Yt4KvL2mwFOh76vwIknDwi2FAlEibCVNspP8.png',
            'price' => '2700000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Belle Anti-aging',
            'link_product'=>'https://doppelherz.vn/san-pham/belle-anti-aging/',
            'image'=>'mcbk71zFQZtFSqnweyOKHmYWdfBM5GSooRIBR8oz.png',
            'price' => '324000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Belle Hairnakin',
            'link_product'=>'https://doppelherz.vn/san-pham/belle-hairnakin/',
            'image'=>'x3fyU6W5KtT0dcjzsUMofbBJMaOSTxhhhhaSIxxn.png',
            'price' => '291000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Coenzyme Q10',
            'link_product'=>'https://doppelherz.vn/san-pham/coenzyme-q10-30-vien/',
            'image'=>'qKgaQJrtreTcHtwA9FbGp44aYvbUG5LubFVpZo73.png',
            'price' => '324000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Eye Vital Capsules',
            'link_product'=>'https://doppelherz.vn/san-pham/eye-vital-capsules-30-vien/',
            'image'=>'vh3vFCdn032xgcjIS75xDkyNitwqTeTLvG17fdFp.png',
            'price' => '339000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Ginkgo + Vitamin B + Choline',
            'link_product'=>'https://doppelherz.vn/san-pham/ginkgo-vitamin-b-choline/',
            'image'=>'gWIC2AH6MkljYPl6DeJXvhCcjMW40mSr71LrqPNU.png',
            'price' => '335000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Haemo Vital',
            'link_product'=>'https://doppelherz.vn/san-pham/haemo-vital/',
            'image'=>'nucIojPsI23wq1XboG17oxKmH0ilEQJRnryvSzIL.png',
            'price' => '349000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Hair Plus',
            'link_product'=>'https://doppelherz.vn/san-pham/hair-plus/',
            'image'=>'NSw8FNWuGSEM3Mzwpi2viIrHS0NAbdCUQMYn3SSs.png',
            'price' => '536000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Joints ULTRA',
            'link_product'=>'https://doppelherz.vn/san-pham/joints-ultra/',
            'image'=>'AS8R2570YBTerGtp2tDMfGnibsE7wJbaKA50Boki.png',
            'price' => '472000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Active D3 Drops',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-active-d3-drops/',
            'image'=>'mear6WhZtJtypLpAZMHbgSqkdiGC3UDkN5iTUsiN.png',
            'price' => '226000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Calciovin Liquid',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-calciovin-liquid/',
            'image'=>'g4CHAPO6P0o7vIFQCbdzUwpPuf9XF6dzCBuRJWbB.png',
            'price' => '450000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Immune 150ml',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-immune-250ml/',
            'image'=>'DPX4yJi0PiUWxlrVq6D8QcVbexEZTi6Tlw6z3Rjh.png',
            'price' => '389000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Iron Drops',
            'link_product'=>'https://doppelherz.vn/san-pham/iron-drops/',
            'image'=>'PqWm2GHrTv7PZwesSJzc7rfdtQtOZ28XZW2oyTDW.png',
            'price' => '293000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Omega-3 Syrup',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-omega-3-syrup/',
            'image'=>'UzQCI2jlevPB8sDs921hFBHRrElJHz5yWknZwutK.png',
            'price' => '478000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Optima',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-optima/',
            'image'=>'QTQGlVeOecPVYhn2W2tQY8LwXyZA9rAfhv7stiw9.png',
            'price' => '305000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Kinder Thymepect',
            'link_product'=>'https://doppelherz.vn/san-pham/kinder-thymepect/',
            'image'=>'vIVSiDerKLw2Ecb9r5rDOAflUe1pYlg4riHtpNaZ.png',
            'price' => '216000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Liver Complex',
            'link_product'=>'https://doppelherz.vn/san-pham/liver-complex/',
            'image'=>'Vy62QEr7dy8aaz8ourHN78H0lk73cMIKoQz2U6my.png',
            'price' => '349000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Magnesium + Calcium + D3',
            'link_product'=>'https://doppelherz.vn/san-pham/magnesium-calcium-d3-30-vien/',
            'image'=>'QlGAa2P3uelNZrT09a6rjoEROUgVjRC6ggZQGT7D.png',
            'price' => '324000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Omega-3 + Folic axit + B6 + B12',
            'link_product'=>'https://doppelherz.vn/san-pham/omega-3-folic-axit-b6-b12/',
            'image'=>'zghPkOAq6WccA8eFiPCeF0lUYUzg1shvBghaUKns.png',
            'price' => '270000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Prostacalm',
            'link_product'=>'https://doppelherz.vn/san-pham/prostacalm/',
            'image'=>'HmxaJWsORLj1BYepyk6ogHE0qYF0u2c8pAWTE0sj.png',
            'price' => '349000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Vital Pregna',
            'link_product'=>'https://doppelherz.vn/san-pham/vital-pregna/',
            'image'=>'PJjJB1JVsp7cYEAZd14NVmaUQusGAku2lhkJuCYF.png',
            'price' => '324000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Vitamin D3 + K2',
            'link_product'=>'https://doppelherz.vn/san-pham/vitamin-d3-k2/',
            'image'=>'Hu4VjEIVmIBu8Z5DafqF2z7ouWOVIHVRh92oybhP.png',
            'price' => '369000',
            'status' => '1',
        ]);


        DB::table('products')->insert([
            'name' =>'Zincodin',
            'link_product'=>'https://doppelherz.vn/san-pham/zincodin/',
            'image'=>'kKzsWQbPjbRlzYdBsF13sgNtP1vA7EzauW3ZPRMq.png',
            'price' => '215000',
            'status' => '1',
        ]);

    }
}
