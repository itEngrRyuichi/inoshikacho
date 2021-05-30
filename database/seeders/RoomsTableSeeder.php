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
        // stores table
        $room_type_title=[
            '和室 スタンダード',
            '洋室 スタンダード',
            '和室 スイート',
            '洋室 スイート',
        ];
        for ($x=0; $x < count($room_type_title); $x++) {
            for ($y=0; $y < 3; $y++) {
                $room_number_title = $x+$y+((3-1)*$x)+101;
                $room_title = "$room_type_title[$x] $room_number_title 号室";
                DB::table('rooms')->insert([
                    'store_id'=> 1,
                    'capacity'=> 4,
                    'room_name' => $room_title
                ]);
            }
        }

        // stores images table
        $images_washitsu1 = ['images/rooms/washitsu1-1.jpg', 'images/rooms/washitsu1-2.jpg', 'images/rooms/washitsu1-3.jpg'];
        $images_washitsu2 = ['images/rooms/washitsu2-1.jpg', 'images/rooms/washitsu2-2.jpeg', 'images/rooms/washitsu2-3.jpg'];
        $images_youshitsu1 = ['images/rooms/ビジネス部屋１－１.jpeg', 'images/rooms/ビジネス部屋１－２.jpeg', 'images/rooms/ビジネス部屋１－３.jpeg'];
        $images_youshitsu2 = ['images/rooms/リゾート部屋１－１.jpeg', 'images/rooms/リゾート部屋１－２.jpeg', 'images/rooms/リゾート部屋１－３.jpeg'];

        // amenities table

        $amenities_washitsu1 = [
            'amenity_name' => ['布団', '無料wifi', 'ナイトウェア、パジャマ', 'バスタオル、フェイスタオル', 'シャンプー', 'コンディショナー', 'ボディーソープ', '歯ブラシ', 'くし'],
            'icon' => ['fas fa-bed', 'fas fa-wifi', 'fas fa-tshirt', 'images/icons/towel.png', 'fas fa-pump-soap', 'fas fa-pump-soap', 'fas fa-pump-soap', 'images/icons/toothbrush.png', 'images/icons/comb.png']
        ];

        $amenities_washitsu2 = [
            'amenity_name' => ['ダブルベッド', '無料wifi', 'ナイトウェア、パジャマ', 'バスタオル、フェイスタオル', 'シャンプー', 'コンディショナー', 'ボディーソープ', '歯ブラシ', 'くし'],
            'icon' => ['fas fa-bed', 'fas fa-wifi', 'fas fa-tshirt', 'images/icons/towel.png', 'fas fa-pump-soap', 'fas fa-pump-soap', 'fas fa-pump-soap', 'images/icons/toothbrush.png', 'images/icons/comb.png']
        ];

        $amenities_youshitsu1 = [
            'amenity_name' => ['ツインベッド', '無料wifi', 'ナイトウェア、パジャマ', 'バスタオル、フェイスタオル', 'シャンプー', 'コンディショナー', 'ボディーソープ', '歯ブラシ', 'くし'],
            'icon' => ['fas fa-bed', 'fas fa-wifi', 'fas fa-tshirt', 'images/icons/towel.png', 'fas fa-pump-soap', 'fas fa-pump-soap', 'fas fa-pump-soap', 'images/icons/toothbrush.png', 'images/icons/comb.png']
        ];

        $amenities_youshitsu2 = [
            'amenity_name' => ['シングルベッド', '無料wifi', 'ナイトウェア、パジャマ', 'バスタオル、フェイスタオル', 'シャンプー', 'コンディショナー', 'ボディーソープ', '歯ブラシ', 'くし'],
            'icon' => ['fas fa-bed', 'fas fa-wifi', 'fas fa-tshirt', 'images/icons/towel.png', 'fas fa-pump-soap', 'fas fa-pump-soap', 'fas fa-pump-soap', 'images/icons/toothbrush.png', 'images/icons/comb.png']
        ];

        for ($i=0; $i < 3; $i++) {
            $room_id = $i + 1;
            for ($x=0; $x < count($images_washitsu1); $x++) {
                DB::table('images')->insert([
                    'room_id'=> $room_id,
                    'url' => $images_washitsu1[$x]
                ]);
            }
            for ($a=0; $a <count($amenities_washitsu1); $a++) {
                for ($x=0; $x < count($amenities_washitsu1['icon']); $x++) {
                    $icon = $amenities_washitsu1['icon'][$x];
                    $amenity_name = $amenities_washitsu1['amenity_name'][$x];
                    DB::table('amenities')->insert([
                        'room_id'=> $room_id,
                        'icon' => $icon,
                        'amenity_name' => $amenity_name,
                    ]);
                }
            }
        }
        for ($i=0; $i < 3; $i++) {
            $room_id = $i + 7;
            for ($x=0; $x < count($images_washitsu2); $x++) {
                DB::table('images')->insert([
                    'room_id'=> $room_id,
                    'url' => $images_washitsu2[$x]
                ]);
            }
            for ($a=0; $a <count($amenities_washitsu2); $a++) {
                for ($x=0; $x < count($amenities_washitsu2['icon']); $x++) {
                    $icon = $amenities_washitsu2['icon'][$x];
                    $amenity_name = $amenities_washitsu2['amenity_name'][$x];
                    DB::table('amenities')->insert([
                        'room_id'=> $room_id,
                        'icon' => $icon,
                        'amenity_name' => $amenity_name,
                    ]);
                }
            }
        }
        for ($i=0; $i < 3; $i++) {
            $room_id = $i + 4;
            for ($x=0; $x < count($images_youshitsu1); $x++) {
                DB::table('images')->insert([
                    'room_id'=> $room_id,
                    'url' => $images_youshitsu1[$x]
                ]);
            }
            for ($a=0; $a <count($amenities_youshitsu1); $a++) {
                for ($x=0; $x < count($amenities_youshitsu1['icon']); $x++) {
                    $icon = $amenities_youshitsu1['icon'][$x];
                    $amenity_name = $amenities_youshitsu1['amenity_name'][$x];
                    DB::table('amenities')->insert([
                        'room_id'=> $room_id,
                        'icon' => $icon,
                        'amenity_name' => $amenity_name,
                    ]);
                }
            }
        }
        for ($i=0; $i < 3; $i++) {
            $room_id = $i + 10;
            for ($x=0; $x < count($images_youshitsu2); $x++) {
                DB::table('images')->insert([
                    'room_id'=> $room_id,
                    'url' => $images_youshitsu2[$x]
                ]);
            }
            for ($a=0; $a <count($amenities_youshitsu2); $a++) {
                for ($x=0; $x < count($amenities_youshitsu2['icon']); $x++) {
                    $icon = $amenities_youshitsu2['icon'][$x];
                    $amenity_name = $amenities_youshitsu2['amenity_name'][$x];
                    DB::table('amenities')->insert([
                        'room_id'=> $room_id,
                        'icon' => $icon,
                        'amenity_name' => $amenity_name,
                    ]);
                }
            }
        }
    }
}
