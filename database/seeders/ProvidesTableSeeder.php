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
            for ($rooms=0; $rooms < 3; $rooms++) {
                // wa standard
                $room_id = $rooms + 1;
                $plan_id = $plans + 1;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
                // you standard
                $room_id2 = $rooms + 4;
                $plan_id2 = $plans + 7;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id2,
                ]);
                // wa suit
                $room_id3 = $rooms + 7;
                $plan_id3 = $plans + 4;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id3,
                    'store_id' => $store_id,
                    'room_id' => $room_id3,
                ]);
                // you suit
                $room_id4 = $rooms + 10;
                $plan_id4 = $plans + 10;
                DB::table('provides')->insert([
                    'plan_id' => $room_id4,
                    'store_id' => $store_id,
                    'room_id' => $plan_id4,
                ]);
            }

        }
    }
}
