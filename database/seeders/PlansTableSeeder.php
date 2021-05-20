<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plans')->insert(['plan_name'=>'朝食付き']);
        DB::table('plans')->insert(['plan_name'=>'朝食・夕食付き']);
        DB::table('plans')->insert(['plan_name'=>'素泊まり']);
    }
}
