<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('person_types')->insert(['person_types'=>'大人(13歳以上)']);
        DB::table('person_types')->insert(['person_types'=>'小学生(7歳から12歳まで)']);
        DB::table('person_types')->insert(['person_types'=>'未就学児(4歳から6歳まで)']);
        DB::table('person_types')->insert(['person_types'=>'幼児(0歳から3歳まで)']);
    }
}
