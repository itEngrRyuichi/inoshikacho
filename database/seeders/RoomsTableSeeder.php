<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
            'シングルルーム',
            'ダブルルーム',
            'ツインルーム',
            'トリプルルーム',
            'クアッドルーム',
            '和室',
            '洋室',
            '和洋室',
        ];
        $capacities=[
            '1',
            '2',
            '2',
            '3',
            '4',
            '4',
            '5',
            '6',
        ];
        for ($x=0; $x <1 ; $x++) { 
            for ($y=0; $y <5 ; $y++) { 
                $room_number = $y+101;
                for ($i=0; $i < count($rooms); $i++) {
                    DB::table('rooms')->insert([
                        'store_id'=>$x+1,
                        'capacity'=>$capacities[$i],
                        'room_name' => "$rooms[$i] $room_number 号室"
                    ]);
                }
            }
        }
    }
}
