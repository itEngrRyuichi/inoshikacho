<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $store_id = 1;
        // スタンダードプラン
        for ($plans=0; $plans < 3; $plans++) {
            $plan_id = $plans + 1;
            for ($rooms=0; $rooms < 6; $rooms++) {
                $room_id = $rooms + 1;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
            $plan_id2 = $plans + 4;
            for ($rooms=0; $rooms < 6; $rooms++) {
                $room_id = $rooms + 7;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
        }
    }
}
