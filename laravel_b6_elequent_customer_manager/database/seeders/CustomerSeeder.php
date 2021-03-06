<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for ($i = 0; $i < 20; $i++) {
            $randomInt = rand(1,5);
            array_push($dataArray, [
                'name' => Str::random(10),
                'dob' => date("Y-m-d", mt_rand(1, time())),
                'city_id' => $randomInt,
                'email' => Str::random(10).'@gmail.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        DB::table('customer')->insert($dataArray);
        //
        //
    }
}
