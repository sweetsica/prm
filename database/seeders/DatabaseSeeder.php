<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\QR;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            ProductSeeder2::class,
            ProductSeeder3_07_03_2023::class,
            GiftSeeder::class,
            PromotionSeeder::class
//            ActiveMenPlusSeeder::class,/*1*/
//            AntiStressSeeder::class,/*2*/
//            AZDepotSeeder::class,/*3*/
//            AZFizzSeeder::class,/*4*/
//            BeautyCollagenSeeder::class,/*5*/
//            BelleAntiAgingSeeder::class,/*6*/
//            BelleHairnakinSeeder::class,/*7*/
//            CoenzymeQ10Seeder::class,/*8*/
//            EyeVitalSeeder::class,/*9*/
//            GinkgoSeeder::class,/*10*/
//            HaemoVitalSeeder::class,/*11*/
//            HairPlusSeeder::class,/*12*/
//            JointsUSeeder::class,/*13*/
//            KinderActiveSeeder::class,/*14*/
//            KinderCalciovinSeeder::class,/*15*/
//            KinderImmuneSeeder::class,/*16*/
//            KinderIronSeeder::class,/*17*/
//            KinderOmegaSeeder::class,/*18*/
//            KinderOptimaSeeder::class,/*19*/
//            KinderThymepectSeeder::class,/*20*/
//            LiverComplexSeeder::class,/*21*/
//            MCD3Seeder::class,/*22*/
//            Omega3FolicAxitSeeder::class,/*23*/
//            ProstacalmSeeder::class,/*24*/
//            VitaminD3K2Seeder::class,/*25*/
//            ZincodinSeeder::class/*26*/
        ]);
    }
}
