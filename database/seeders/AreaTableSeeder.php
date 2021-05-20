<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(['area_name' => '北海道']);
        DB::table('areas')->insert(['area_name' => '東北']);
        DB::table('areas')->insert(['area_name' => '北関東']);
        DB::table('areas')->insert(['area_name' => '首都圏']);
        DB::table('areas')->insert(['area_name' => '甲信越']);
        DB::table('areas')->insert(['area_name' => '東海']);
        DB::table('areas')->insert(['area_name' => '伊豆・箱根']);
        DB::table('areas')->insert(['area_name' => '北陸']);
        DB::table('areas')->insert(['area_name' => '近畿']);
        DB::table('areas')->insert(['area_name' => '四国']);
        DB::table('areas')->insert(['area_name' => '山陽・山陰']);
        DB::table('areas')->insert(['area_name' => '九州']);
        DB::table('areas')->insert(['area_name' => '沖縄']);
    }
}
