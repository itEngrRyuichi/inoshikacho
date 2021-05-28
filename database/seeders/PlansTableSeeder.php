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
        $plans= [
            ['plan_name'=>'素泊まり'],
            ['plan_name'=>'朝食付き'],
            ['plan_name'=>'朝食・夕食付き'],
        ];
        for ($i=0; $i < count($plans); $i++) {
            DB::table('plans')->insert([
                $plans[$i]
            ]);
        }
        
        $plan_image = [
            ['images/plans/旅館プラン素泊まり１.jpg', 'images/plans/旅館プラン素泊まり２.jpg', 'images/plans/旅館プラン素泊まり３.jpg', ],
            ['images/plans/旅館プラン朝１.jpg', 'images/plans/旅館プラン朝２.jpg', 'images/plans/旅館プラン朝３.jpg', ],
            ['images/plans/旅館プラン夜１.jpg', 'images/plans/旅館プラン夜２.jpg', 'images/plans/旅館プラン夜３.jpg', ],
        ];
        for ($i=0; $i < count($plan_image); $i++) {
            for ($x=0; $x < count($plan_image[$i]); $x++) { 
                DB::table('images')->insert([
                    'plan_id'=>$i+1,
                    'url'=>$plan_image[$i][$x],
                ]);
            }
        } 
        /* for ($i=0; $i < count($plan_image); $i++) {
             for ($x=0; $x < count($plan_image[$i]); $x++) { 
                DB::table('plans')->insert(['plan_name'=>'朝食付き']);
                DB::table('plans')->insert(['plan_name'=>'朝食・夕食付き']);
                DB::table('plans')->insert(['plan_name'=>'素泊まり']);
             }
        } */
    }
}
