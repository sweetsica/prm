<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Cassandra\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ActiveMenPlusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion_id = 3;
        $product_id = 3 ;
        $count = 480;
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
