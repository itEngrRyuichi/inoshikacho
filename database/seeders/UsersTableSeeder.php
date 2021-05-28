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
            'images/users/NARUTO1-カカシ.jpg',
            'images/users/NARUTO2-うずまきナルト.jpg',
            'images/users/NARUTO3-サスケ.jpg',
            'images/users/NARUTO4-春野サクラ.jpg',
            'images/users/NARUTO5-ヤマト.jpg',
            'images/users/NARUTO6-サイ.jpg',
            'images/users/NARUTO7-猿飛アスマ.jpg',
            'images/users/NARUTO8-奈良シカマル.jpg',
            'images/users/NARUTO9-山中いの.jpg',
            'images/users/NARUTO10-秋道チョウジ.png',
        ];

        for ($i=0; $i < count($name_1); $i++) {
            $name=$name_1[$i];
            $name_alpha = $name_1_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,28);
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
        for ($i=0; $i <count($name_1_images) ; $i++) { 
            DB::table('images')->insert([
                'user_id'=> $i+1,
                'url'=>$name_1_images[$i],
            ]);
        }

        //店舗管理ユーザー
        $name_2 = ['夕日紅', '日向ヒナタ', '犬塚キバ', '油女シノ','マイト・ガイ',
        'ロック・リー', '日向ネジ', 'テンテン', '千手柱間', '千手扉間'];
        $name_2_alpha = ['kurenai', 'hinata', 'kiba','shino', 'gai',
        'ri', 'neji', 'tenten', 'hashirama', 'tobirama',];
        $name_2_images = [
            'images/users/NARUTO11-夕日紅.jpg',
            'images/users/NARUTO12-日向ヒナタ.webp',
            'images/users/NARUTO13-犬塚キバ.png',
            'images/users/NARUTO14-油女シノ.png',
            'images/users/NARUTO15-マイト・ガイ.jpg',
            'images/users/NARUTO16-ロック・リー.jpg',
            'images/users/NARUTO17-日向ネジ.jpeg',
            'images/users/NARUTO18-テンテン.jpg',
            'images/users/NARUTO19-千手柱間.jpg',
            'images/users/NARUTO20-千手扉間.jpg',
        ];

        for ($i=0; $i < count($name_2); $i++) {
            $name=$name_2[$i];
            $name_alpha = $name_2_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,28);
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
        for ($i=0; $i <count($name_2_images) ; $i++) { 
            DB::table('images')->insert([
                'user_id'=> $i+11,
                'url'=>$name_2_images[$i],
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
    $name_3_images = [
        'images/users/NARUTO21-猿飛ヒルゼン.jpg',
        'images/users/NARUTO22-波風ミナト.jpg',
        'images/users/NARUTO23-綱手.png',
        'images/users/NARUTO24-志村ダンゾウ.jpeg',
        'images/users/NARUTO25-シズネ.jpeg',
        'images/users/NARUTO26-油女シビ.jpg',
        'images/users/NARUTO27-奈良シカク.jpeg',
        'images/users/NARUTO28-山中いのいち.jpg',
        'images/users/NARUTO29-秋道チョウザ.jpeg',
        'images/users/NARUTO30-エビス.png',
        'images/users/NARUTO31-森乃イビキ.jpg',
        'images/users/NARUTO32-みたらしアンコ.jpg',
        'images/users/NARUTO33-ハヤテ.jpeg',
        'images/users/NARUTO34-不知火ゲンマ.jpg',
        'images/users/NARUTO35-並足ライドウ.jpg',
        'images/users/NARUTO36-犬塚ツメ.jpg',
        'images/users/NARUTO37-山城アオバ.jpg',
        'images/users/NARUTO38-うみのイルカ.jpg',
        'images/users/NARUTO39-ミズキ.jpg',
        'images/users/NARUTO40-自来也.jpeg',
        'images/users/NARUTO41-木の葉丸.jpg',
        'images/users/NARUTO42-風祭モエギ.jpg',
        'images/users/NARUTO43-伊勢ウドン.png',
        'images/users/NARUTO44-日向ヒアシ.jpg',
        'images/users/NARUTO45-日向ハナビ.jpg',
        'images/users/NARUTO46-うずまきクシナ.jpg',
        'images/users/NARUTO47-うちはフガク.jpg',
        'images/users/NARUTO48-うちはミコト.jpg',
        'images/users/NARUTO49-日向ヒザシ.jpeg',
        'images/users/NARUTO50-はたけサクモ.jpg',
        'images/users/NARUTO51-加藤ダン.jpg',
        'images/users/NARUTO52-うちはオビト.jpg',
        'images/users/NARUTO53-うちはシン.jpg',
        'images/users/NARUTO54-我愛羅.jpg',
        'images/users/NARUTO55-テマリ.jpg',
        'images/users/NARUTO56-カンクロウ.jpg',
        'images/users/NARUTO57-夜叉丸.jpg',
        'images/users/NARUTO58-由良.png',
        'images/users/NARUTO59-チヨ.jpg',
        'images/users/NARUTO60-照美メイ.jpg',
        'images/users/NARUTO61-アオ.jpg',
        'images/users/NARUTO62-長十郎.png',
        'images/users/NARUTO63-オオノキ.png',
        'images/users/NARUTO64-黒ツチ.jpeg',
        'images/users/NARUTO65-黄ツチ.jpg',
        'images/users/NARUTO66-赤ツチ.jpg',
        'images/users/NARUTO67-エー.jpg',
        'images/users/NARUTO68-キラービー.jpg',
        'images/users/NARUTO69-マブイ.jpg',
        'images/users/NARUTO70-ダルイ.jpeg',
        'images/users/NARUTO71-大蛇丸.jpg',
        'images/users/NARUTO72-カブト.jpg',
        'images/users/NARUTO73-赤銅ヨロイ.jpg',
        'images/users/NARUTO74-次郎坊.png',
        'images/users/NARUTO75-鬼童丸.jpg',
        'images/users/NARUTO76-左近.jpg',
        'images/users/NARUTO77-多由也.png',
        'images/users/NARUTO78-君麻呂.jpg',
        'images/users/NARUTO79-桃地再不斬.jpeg',
        'images/users/NARUTO80-白.jpg',
        'images/users/NARUTO81-鬼灯水月.png',
        'images/users/NARUTO82-香隣.jpg',
        'images/users/NARUTO83-重吾.jpg',
        'images/users/NARUTO84-うちはマダラ.jpg',
        'images/users/NARUTO85-ガマ吉.jpg',
        'images/users/NARUTO86-カツユ.jpg',
        'images/users/NARUTO87-ガトー.jpeg',
        'images/users/NARUTO88-テウチ.jpeg',
        'images/users/NARUTO89-アヤメ.jpg',
        'images/users/NARUTO90-ドス・キヌタ.png',
        'images/users/NARUTO91-ザク・アブミ.jpg',
        'images/users/NARUTO92-長門.jpg',
        'images/users/NARUTO93-小南.jpg',
        'images/users/NARUTO94-うちはイタチ.jpg',
        'images/users/NARUTO95-干柿鬼鮫.png',
        'images/users/NARUTO96-サソリ.jpg',
        'images/users/NARUTO97-デイダラ.png',
        'images/users/NARUTO98-飛段.png',
        'images/users/NARUTO99-角都.jpg',
        'images/users/NARUTO100-ゼツ.jpg',
    ];
    


        for($i=0; $i < count($name_3); $i++){
            $name=$name_3[$i];
            $name_alpha = $name_3_alpha[$i];
            $year=rand(1990,2010);
            $month=rand(1,12);
            $date=rand(1,28);
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
        for ($i=0; $i <count($name_3_images) ; $i++) { 
            DB::table('images')->insert([
                'user_id'=> $i+21,
                'url'=>$name_3_images[$i],
            ]);
        }
    }
}
