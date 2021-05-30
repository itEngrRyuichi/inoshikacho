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
            for ($rooms=0; $rooms < 5; $rooms++) {
                $room_id = $rooms + 1;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
                $room_id = $rooms + 6;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
        }
        for ($plans=0; $plans < 3; $plans++) {
            $plan_id = $plans + 4;
            for ($rooms=0; $rooms < 5; $rooms++) {
                $room_id = $rooms + 11;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
                $room_id = $rooms + 16;
                DB::table('provides')->insert([
                    'plan_id' => $plan_id,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
        }
        $store_id2 = 2;
        // スタンダードプラン
        for ($plans=0; $plans < 3; $plans++) {
            $plan_id = $plans + 7;
            for ($rooms=0; $rooms < 5; $rooms++) {
                $room_id = $rooms + 21;
                DB::table('provides')->insert([
                    'plan_id' => $store_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
                $room_id = $rooms + 26;
                DB::table('provides')->insert([
                    'plan_id' => $store_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
        }
        for ($plans=0; $plans < 3; $plans++) {
            $plan_id = $plans + 10;
            for ($rooms=0; $rooms < 5; $rooms++) {
                $room_id = $rooms + 31;
                DB::table('provides')->insert([
                    'plan_id' => $store_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
                $room_id = $rooms + 36;
                DB::table('provides')->insert([
                    'plan_id' => $store_id2,
                    'store_id' => $store_id,
                    'room_id' => $room_id,
                ]);
            }
        }
    }
}
