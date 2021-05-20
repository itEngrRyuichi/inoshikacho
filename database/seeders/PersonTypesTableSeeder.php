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
        DB::table('person_types')->insert(['person_types'=>'子供']);
        DB::table('person_types')->insert(['person_types'=>'大人']);
    }
}
