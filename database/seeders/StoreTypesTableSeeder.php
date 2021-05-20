<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_types')->insert(['store_type_name' => 'シティーホテル']);
        DB::table('store_types')->insert(['store_type_name' => 'リゾートホテル']);
        DB::table('store_types')->insert(['store_type_name' => 'ビジネスホテル']);
        DB::table('store_types')->insert(['store_type_name' => '旅館']);
        DB::table('store_types')->insert(['store_type_name' => '民宿']);
        DB::table('store_types')->insert(['store_type_name' => 'ペンション']);
    }

    /* php artisan db:seed --class=StoreTypesTableSeeder */
}
