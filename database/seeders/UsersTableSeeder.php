<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //サイト管理ユーザー
        $name_1 = ['カカシ', 'ナルト', 'サスケ', '春野サクラ', 'ヤマト', 
        'サイ', '猿飛アスマ', '奈良シカマル', '山中いの', '秋道チョウジ'];

        for ($i=0; $i < count($name_1); $i++) { 
        //$number=$date+3;
        //1から12のランダムな整数をつくる、それを生年月日にいれる、
        //1990～2021のランダムな整数をつくる
        //四桁のランダムな整数をつくる×２
        $year=rand(1990,2010);
        $month=rand(1,12);
        $date=rand(1,31);
        $phone=rand(1000,1999);
        $address=rand(1,10);
        DB::table('users')->insert(['name'=> $name_1/* ,
                                    'type'=>1,
                                    'birthday'=>"$year-$month-$date",
                                    'email'=>"$name_1@example.com",
                                    'phone'=>"080-$phone-$phone",
                                    'password'=>$name_1,
                                    'address'=>"東京都新宿区$address-$address-$address", */
            ]);
        }

        /* //店舗管理ユーザー
        $name_2 = ['夕日紅', '日向ヒナタ', '犬塚キバ', '油女シノ','マイト・ガイ', 
        'ロック・リー', '日向ネジ', 'テンテン', '千手柱間', '千手扉間'];

        for ($i=0; $i < count($name_2); $i++) { 

        DB::table('users')->insert(['name'=>$name_2,
                                    'type'=>2,
                                    'birthday'=>'2021-05-24',
                                    'email'=>"$name_2@example.com",
                                    'phone'=>'000-0000-0000',
                                    'password'=>$name_2,
                                    'address'=>'東京都渋谷区',
        ]);
        }


        //会員ユーザ
        $name_3 =['猿飛ヒルゼン', '波風ミナト', '網手', '志村ダンゾウ', 'シズネ',
        '油女シビ', '奈良シカク', '山中いのいち', '秋道チョウザ', 'エビス',
        '森乃イビキ', 'みたらしアンコ', 'ハヤテ', '不知火ゲンマ', '並足ライドウ',
        '犬塚ツメ', '山城アオバ', 'うみのイルカ', 'ミズキ', '自来也',
        '木の葉丸', '風祭モエギ', '伊勢ウドン', '日向ヒアシ', '日向ハナビ',
        'うずまきクシナ', 'うちはフガク', 'うちはミコト', '日向ヒザシ', 'はたけサクモ',
        '', '', '', '', '',
        '', '', '', '', '',];

        for($i=0; $i < count($name_3); $i++){
    
        DB::table('users')->insert(['name'=>$name_3,
                                    'type'=>3,
                                    'birthday'=>'2021-05-24',
                                    'email'=>"$name_3@example.com",
                                    'phone'=>'000-0000-0000',
                                    'password'=>$name_3,
                                    'address'=>'東京都千代田区',
        ]);
        } */
    }
}    