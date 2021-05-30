<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // プラン名
        $plans_names = [
            '素泊まり スタンダード',
            '朝食付き　スタンダード',
            '朝食・夕食付き　スタンダード',
            '素泊まり スイート',
            'バイキング朝食付き　スイート',
            'バイキング朝食付き + 高級ディナー付き　スイート',
        ];

        $plan_descs = [
            'ごゆっくりとお過ごしください。',
            '部屋での朝食です。ごゆっくりお過ごしください。',
            '部屋での朝食・夕食です。ごゆっくりお過ごしください。',
            'ごゆっくりとお過ごしください。',
            '洋食・和食選び放題バイキング形式の朝食です',
            '洋食・和食選び放題バイキング形式の朝食と夜はA5牛を使った高級コース料理をお楽しみください。',
        ];

        // スイート
        $price_pattern1 = ['10450', '8250', '6150', '3000'];
        $price_pattern2 = ['8150', '6150', '3150', '1000'];
        $price_pattern3 = ['6450', '6450', '3450', '500'];

        // スタンダード
        $price_pattern4 = ['8880', '7000', '4450', '2500'];
        $price_pattern5 = ['7880', '6000', '3450', '1500'];
        $price_pattern6 = ['6480', '5000', '2450', '1500'];

        // 和室
        $washitsu_images = [
            ['images/plans/旅館プラン素泊まり１.jpg', 'images/plans/旅館プラン素泊まり２.jpg', 'images/plans/旅館プラン素泊まり３.jpg', ],
            ['images/plans/旅館プラン朝１.jpg', 'images/plans/旅館プラン朝２.jpg', 'images/plans/旅館プラン朝３.jpg', ],
            ['images/plans/旅館プラン夜１.jpg', 'images/plans/旅館プラン夜２.jpg', 'images/plans/旅館プラン夜３.jpg', ],
        ];
        // 洋室
        $youshitsu_images = [
            ['images/plans/youshoku_sudomari1.jpg', 'images/plans/youshoku_sudomari2.jpg', 'images/plans/youshoku_sudomari3.jpg', ],
            ['images/plans/youshoku_asa1.jpg', 'images/plans/youshoku_asa2.jpg', 'images/plans/youshoku_asa3.jpg', ],
            ['images/plans/youshoku_yoru1.jpg', 'images/plans/youshoku_yoru2.jpg', 'images/plans/youshoku_yoru3.jpg', ],
        ];

        // plans
        for ($x=0; $x < 2; $x++) {
            for ($i=0; $i <count($plans_names) ; $i++) {
                DB::table('plans')->insert([
                    'plan_name'=> $plans_names[$i],
                    'plan_description' => $plan_descs[$i],
                ]);
            }
        }
        // images
        for ($x=0; $x < 3; $x++) {
            $plan_id = $x + 1;
            for ($images=0; $images < count($washitsu_images[$x]); $images++) {
                DB::table('images')->insert([
                    'plan_id'=> $plan_id,
                    'url' => $washitsu_images[$x][$images],
                ]);
            }
            $plan_id2 = $x + 4;
            for ($images=0; $images < count($washitsu_images[$x]); $images++) {
                DB::table('images')->insert([
                    'plan_id'=> $plan_id2,
                    'url' => $washitsu_images[$x][$images],
                ]);
            }
            $plan_id3 = $x + 7;
            for ($images=0; $images < count($youshitsu_images[$x]); $images++) {
                DB::table('images')->insert([
                    'plan_id'=> $plan_id3,
                    'url' => $youshitsu_images[$x][$images],
                ]);
            }
            $plan_id4 = $x + 10;
            for ($images=0; $images < count($youshitsu_images[$x]); $images++) {
                DB::table('images')->insert([
                    'plan_id'=> $plan_id4,
                    'url' => $youshitsu_images[$x][$images],
                ]);
            }
        }


        // prices
        // youshitsu
        for ($i=0; $i <count($price_pattern1) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 12,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern1[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern2) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 11,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern2[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern3) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 10,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern3[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern4) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 9,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern4[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern5) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 8,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern5[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern6) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 7,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern6[$i],
            ]);
        }
        // washitsu
        for ($i=0; $i <count($price_pattern1) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 6,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern1[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern2) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 5,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern2[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern3) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 4,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern3[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern4) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 3,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern4[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern5) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 2,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern5[$i],
            ]);
        }
        for ($i=0; $i <count($price_pattern6) ; $i++) {
            $person_type_id = $i + 1;
            DB::table('prices')->insert([
                'plan_id' => 1,
                'person_type_id' => $person_type_id,
                'price' => $price_pattern6[$i],
            ]);
        }
    }
}
