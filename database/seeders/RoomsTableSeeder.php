<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms=[
            ['room_name'=>'シングルルーム'],
            ['room_name'=>'ダブルルーム'],
            ['room_name'=>'ツインルーム'],
            ['room_name'=>'トリプルルーム'],
            ['room_name'=>'クアッドルーム'],
            ['room_name'=>'和室'],
            ['room_name'=>'洋室'],
            ['room_name'=>'和洋室'],
        ];
        $capacities=[
            ['capacity'=>'1'],
            ['capacity'=>'2'],
            ['capacity'=>'2'],
            ['capacity'=>'3'],
            ['capacity'=>'4'],
            ['capacity'=>'4'],
            ['capacity'=>'5'],
            ['capacity'=>'6'],
        ];
        for ($x=0; $x <1 ; $x++) { 
            for ($y=0; $y <5 ; $y++) { 
                $room_number = $y+101;
                for ($i=0; $i < count($rooms); $i++) {
                    DB::table('rooms')->insert([
                        'room_id'=>$x+1,
                        $capacities[$i],
                        'room_name' => "$rooms[$i] $room_number"
                    ]);
                }
            }
        }
    }
}
