<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class HairPlusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion_id = 13;
        $product_id = 13;
        $count = 5000;
        $timeNow = Carbon::now();

        for ($i =0 ; $i < $count ; $i++){
            $specialCode = Str::random(12);
            DB::table('q_r_s')->insert([
                "promotion_id"=>$promotion_id,
                "product_id"=>$product_id,
                "specialCode"=>$specialCode,
                "linkQr"=>URL::route('website')."/tichdiem/".$promotion_id."/".$product_id."/".$specialCode,
                'created_at'=>$timeNow,
                'updated_at'=>$timeNow
            ]);
        }
    }
}
