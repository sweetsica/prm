<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConceptiveMenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion_id = 31;
        $product_id = 31;
        $count = 0;
        $timeNow = Carbon::now();
        for ($i =0 ; $i < $count ; $i++){
            $specialCode = Str::random(12);
            DB::table('q_r_s')->insert([
                "promotion_id"=>$promotion_id,
                "product_id"=>$product_id,
                "specialCode"=>$specialCode,
                "linkQR"=>"https://tichdiem.doppelherz.vn/tichdiem/".$promotion_id."/".$product_id."/".$specialCode,
                'created_at'=>$timeNow,
                'updated_at'=>$timeNow
            ]);
        }
    }
}