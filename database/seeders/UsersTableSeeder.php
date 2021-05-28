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
        $name_1_alpha = ['kakashi', 'naruto', 'sasuke', 'sakura', 'yamato',
        'sai', 'asuma', 'shikmaru', 'ino', 'choji'];
        $name_1_images = [
            'images/users/hogehoge.jpg',
            'images/users/hogehoge.jpg'
        ];

        for ($i=0; $i < count($name_1); $i++) {
            $name=$name_1[$i];
            $name_alpha = $name_1_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,31);
            $phone_1=rand(1000,1999);
            $phone_2=rand(1000,1999);
            $address_1=rand(1,10);
            $address_2=rand(1,15);
            $address_3=rand(1,10);
        DB::table('users')->insert(['name'=> $name,
                'type'=>1,
                'birthday'=>"$year-$month-$date",
                'email'=>"$name_alpha@example.com",
                'phone'=>"080-$phone_1-$phone_2",
                'password'=>$name_alpha,
                'address'=>"東京都新宿区$address_1-$address_2-$address_3",
            ]);
        }

        //店舗管理ユーザー
        $name_2 = ['夕日紅', '日向ヒナタ', '犬塚キバ', '油女シノ','マイト・ガイ',
        'ロック・リー', '日向ネジ', 'テンテン', '千手柱間', '千手扉間'];
        $name_2_alpha=['kurenai', 'hinata', 'kiba','shino', 'gai',
        'ri', 'neji', 'tenten', 'hashirama', 'tobirama',];

        for ($i=0; $i < count($name_2); $i++) {
            $name=$name_2[$i];
            $name_alpha = $name_2_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,31);
            $phone_1=rand(1000,1999);
            $phone_2=rand(1000,1999);
            $address_1=rand(1,10);
            $address_2=rand(1,15);
            $address_3=rand(1,10);

        DB::table('users')->insert(['name'=> $name,
                                    'type'=>2,
                                    'birthday'=>"$year-$month-$date",
                                    'email'=>"$name_alpha@example.com",
                                    'phone'=>"090-$phone_1-$phone_2",
                                    'password'=>$name_alpha,
                                    'address'=>"東京都渋谷区$address_1-$address_2-$address_3",
        ]);
        }


        //会員ユーザ
        $name_3 =['猿飛ヒルゼン', '波風ミナト', '綱手', '志村ダンゾウ', 'シズネ',
        '油女シビ', '奈良シカク', '山中いのいち', '秋道チョウザ', 'エビス',
        '森乃イビキ', 'みたらしアンコ', 'ハヤテ', '不知火ゲンマ', '並足ライドウ',
        '犬塚ツメ', '山城アオバ', 'うみのイルカ', 'ミズキ', '自来也',
        '木の葉丸', '風祭モエギ', '伊勢ウドン', '日向ヒアシ', '日向ハナビ',
        'うずまきクシナ', 'うちはフガク', 'うちはミコト', '日向ヒザシ', 'はたけサクモ',
        '加藤ダン', 'うちはオビト', 'うちはシン', '我愛羅', 'テマリ',
        'カンクロウ', '夜叉丸', '由良', 'チヨ', '照美メイ',
        'アオ', '長十郎', 'オオノキ', '黒ツチ', '黄ツチ',
        '赤ツチ', 'エー', 'キラービー', 'マブイ', 'ダルイ',
        '大蛇丸', 'カブト', '赤銅ヨロイ', '次郎坊', '鬼童丸',
        '左近', '多由也', '君麻呂', '桃地再不斬', '白',
        '鬼灯水月', '香隣', '重吾', 'うちはマダラ', 'ガマ吉',
        'カツユ', 'ガトー', 'テウチ', 'アヤメ', 'ドス・キヌタ',
        'ザク・アブミ', '長門', '小南', 'うちはイタチ', '干柿鬼鮫',
        'サソリ', 'デイダラ', '飛段', '角都', 'ゼツ'];
        $name_3_alpha=['hiruzen', 'minato', 'tsunate', 'danzou', 'shizune',
        'shibi', 'shikaku', 'inoichi', 'ctouza','ebisu',
        'ibiki','anko', 'hayate', 'genma', 'raidou',
        'tsume', 'aoba', 'iruka', 'mizuki', 'jiraiya',
        'konohamaru', 'moegi', 'udon','hiashi','hanabi',
        'kushina', 'hugaku', 'mikoto', 'hizashi','sakumo',
        'dan', 'obito', 'shin', 'gaara', 'temari',
        'kankutou', 'yashamaru', 'yura', 'chiyo', 'mei',
        'ao', 'choujuurou','oonoki', 'kurotsuchi', 'kitsuchi',
        'akatsuchi', 'e', 'kira-bi-', 'mabui', 'darui',
        'orochimaru', 'kabuto', 'yoroi', 'jiroubo', 'kidoumaru',
        'sakon', 'tayuya', 'kimimaro', 'zabuza','shiro',
        'suigetsu', 'karin', 'jugo', 'madara', 'gamakichi',
        'katsuyu', 'gato', 'teuchi', 'ayame', 'kinuta',
        'abumi', 'nagato', 'konan', 'itachi','kisame',
        'sasori', 'deidara', 'hidan', 'kakuto', 'zetsu',
    ];

        for($i=0; $i < count($name_3); $i++){
            $name=$name_3[$i];
            $name_alpha = $name_3_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,31);
            $phone_1=rand(1000,1999);
            $phone_2=rand(1000,1999);
            $address_1=rand(1,10);
            $address_2=rand(1,10);
            $address_3=rand(1,10);

        DB::table('users')->insert(['name'=> $name,
                                    'type'=>3,
                                    'birthday'=>"$year-$month-$date",
                                    'email'=>"$name_alpha@example.com",
                                    'phone'=>"080-$phone_1-$phone_2",
                                    'password'=>$name_alpha,
                                    'address'=>"東京都千代田区$address_1-$address_2-$address_3",
        ]);
        }
    }
}
