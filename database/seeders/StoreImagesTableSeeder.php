<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StoreImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store_image = [
            ['images/stores/滝隠れの里１.jpg', 'images/stores/滝隠れの里２.jpg', 'images/stores/滝隠れの里３.jpg'],
            ['images/stores/木の葉隠れの里１.jpg', 'images/stores/木の葉隠れの里２.jpg', 'images/stores/木の葉隠れの里３.jpg'],
            ['images/stores/砂隠れの里１.jpg', 'images/stores/砂隠れの里２.jpg', 'images/stores/砂隠れの里３.jpg'],
            ['images/stores/草隠れの里１.jpg', 'images/stores/草隠れの里２.jpg', 'images/stores/草隠れの里３.jpg'],
            ['images/stores/霧隠れの里１.jpg', 'images/stores/霧隠れの里２.jpg', 'images/stores/霧隠れの里３.jpg'],

            ['images/stores/砂隠れの里１.jpg', 'images/stores/砂隠れの里２.jpg', 'images/stores/砂隠れの里３.jpg'],
            ['images/stores/霧隠れの里１.jpg', 'images/stores/霧隠れの里２.jpg', 'images/stores/霧隠れの里３.jpg'],
            ['images/stores/滝隠れの里１.jpg', 'images/stores/滝隠れの里２.jpg', 'images/stores/滝隠れの里３.jpg'],
            ['images/stores/草隠れの里１.jpg', 'images/stores/草隠れの里２.jpg', 'images/stores/草隠れの里３.jpg'],
            ['images/stores/霧隠れの里１.jpg', 'images/stores/霧隠れの里２.jpg', 'images/stores/霧隠れの里３.jpg'],
            ['images/stores/草隠れの里１.jpg', 'images/stores/草隠れの里２.jpg', 'images/stores/草隠れの里３.jpg'],
            ['images/stores/霧隠れの里１.jpg', 'images/stores/霧隠れの里２.jpg', 'images/stores/霧隠れの里３.jpg'],
            ['images/stores/滝隠れの里１.jpg', 'images/stores/滝隠れの里２.jpg', 'images/stores/滝隠れの里３.jpg'],
            ['images/stores/木の葉隠れの里１.jpg', 'images/stores/木の葉隠れの里２.jpg', 'images/stores/木の葉隠れの里３.jpg'],
            ['images/stores/砂隠れの里１.jpg', 'images/stores/砂隠れの里２.jpg', 'images/stores/砂隠れの里３.jpg'],
        ];
        for ($i=0; $i < count($store_image); $i++) {
            for ($x=0; $x < count($store_image[$i]); $x++) { 
                DB::table('images')->insert([
                    'store_id'=>$i+1,
                    'url'=>$store_image[$i][$x],
                ]);
            }
        } 
    }
}
