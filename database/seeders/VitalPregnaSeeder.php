<?php

namespace Database\Seeders;

use App\Models\QR;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class VitalPregnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20000;
        $promotion_id = 26;//Vital Pregna
        $product_id = 26;//Vital Pregna
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
