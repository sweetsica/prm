<?php

namespace Database\Seeders;

//use Illuminate\Database\Eloquent\Factories\Factory as Faker;
use App\Models\Customer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker::create();

//        dd(Faker::create()->unique()->phoneNumber);

//        for ($i = 1; $i <= 20; $i++) {
//            Customer::create([
//                'name' => $faker->name,
//                'phone' => $faker->unique()->phoneNumber,
//                'password' => Hash::make('123456'),
//                'email' => $faker->unique()->safeEmail,
//            ]);
//        }
    }
}
