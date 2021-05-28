<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store_name=array('旅館','プリンスホテル','サンホテル','ホテルニュー','民宿');
        $stores=[
            ['store_name'=>'草隠れの里','postal'=>'0141201','address'=>'秋田県仙北市田沢湖生保内字駒ヶ岳','phone'=>'08011111111','email'=>'kusa@naruto.jp','description'=>'大蛇丸の南アジト監獄の管理者の香燐(かりん)や、10名の忍によって構成された小組織“暁”のゼツがこの里の出身です。他にも、鬼灯城の城主である無為(むい)などが所属しています。','access'=>'草隠れの里前駅から徒歩５分。当館までは、ぜひ徒歩でお越しください。','store_type_id'=>'5','area_id'=>'2'],
            ['store_name'=>'滝隠れの里','postal'=>'9998201','address'=>'山形県酒田市升田字大森','phone'=>'08022222222','email'=>'taki@naruto.jp','description'=>'五大国以外で唯一“尾獣”という、尾を持った巨大な魔獣の七尾を保有していました。七尾の尾獣を任されているだけあり、優秀な上忍を次々と輩出している滝隠れの里。','access'=>'音隠れの里駅前より徒歩15分。少し離れていますが、町中に広がる音楽を聴きながらお越しください。','store_type_id'=>'4','area_id'=>'2'],
            ['store_name'=>'木ノ葉隠れの里','postal'=>'0240322','address'=>'岩手県北上市和賀町岩崎新田','phone'=>'08033333333','email'=>'konoha@naruto.jp','description'=>'隠れ里のシステムを構築した大元となっている里で、他国の隠れ里はこれに倣う形で様々な隠れ里を作っていきました。木ノ葉の隠れ里の長は“火影”と呼ばれています。','access'=>'木ノ葉隠れの里前駅から徒歩２分。駅前の木ノ葉通りをまっすぐ進んだところにあります。','store_type_id'=>'2','area_id'=>'2'],
            ['store_name'=>'砂隠れの里','postal'=>'0394223','address'=>'青森県下北郡東通村小田野沢','phone'=>'08044444444','email'=>'suna@naruto.jp','description'=>'砂が多く地形的に過酷な環境下であることに加え、風の国の大名が軍縮を推し進めようとしていることもあり国力は衰えつつありますが、一人ひとりの忍の能力は高いです。','access'=>'砂隠れの里駅前から徒歩30分。当館から迎えの車を手配いたします。','store_type_id'=>'1','area_id'=>'2'],
            ['store_name'=>'霧隠れの里','postal'=>'0383542','address'=>'青森県北津軽郡鶴田町廻堰大沢81-150','phone'=>'08055555555','email'=>'kiri@naruto.jp','description'=>'山間部の霧の深い場所に位置しているため敵から攻められにくいということに加え、初代水影の白蓮(びゃくれん)による秘密主義が重なり、非常に閉鎖的かつ排他的な発展を遂げている霧隠れ。','access'=>'霧隠れの里駅前から徒歩3分。霧が大変濃いため20分かかるお客様もいらっしゃいます。お時間に余裕をもってお越しください。','store_type_id'=>'3','area_id'=>'2'],
            ['store_name'=>'岩隠れの里','postal'=>'0283201','address'=>'岩手県花巻市大迫町内川目','phone'=>'08066666666','email'=>'iwa@naruto.jp','description'=>'高い軍事力を誇りますが、若手の実力不足など、深刻な戦力低下が目下の問題。オオノキや赤ツチ、抜け忍のデイダラなどが代表的な忍です。','access'=>'岩隠れの里駅前から徒歩10分。山を右手に道なりに来たところにあります。','store_type_id'=>'6','area_id'=>'2'],
            ['store_name'=>'雲隠れの里','postal'=>'9902301','address'=>'山形県山形市蔵王温泉229-3','phone'=>'08077777777','email'=>'kumo@naruto.jp','description'=>'高山が多く山脈地帯に位置していて資源に乏しく思われますが、第四次忍界大戦の開始時などを見ると五大国の中でも一番の財力を誇っています。','access'=>'雲隠れの里駅前より特別ヘリにて5分。常にヘリが3台待機していますので、お声掛けください。','store_type_id'=>'2','area_id'=>'2'],
            ['store_name'=>'渦潮隠れの里','postal'=>'8513500','address'=>'長崎県西海市 佐世保市針尾東町2678','phone'=>'08088888888','email'=>'uzusio@naruto.jp','description'=>'里のマークだった渦潮は現在、同盟を結んでいた木ノ葉のマークに取り入れられています。“長寿の里”のと呼ばれるように、里に住む人達の平均寿命が長く、封印術にも長けていることが特徴。','access'=>'渦潮隠れの里駅前より徒歩30分。当館から迎えの車を手配いたします。','store_type_id'=>'3','area_id'=>'12'],
            ['store_name'=>'音隠れの里','postal'=>'8613205','address'=>'熊本県上益城郡御船町滝川1658','phone'=>'08099999999','email'=>'oto@naruto.jp','description'=>'小国である”田の国”の大名が軍備の拡張を推し進めようとしているところに大蛇丸がつけ込み、自らの駒を生み出すための音隠れの里が作られました。','access'=>'音隠れの里駅前より徒歩15分。少し離れていますが、町中に広がる音楽を聴きながらお越しください。','store_type_id'=>'1','area_id'=>'12'],
            ['store_name'=>'雨隠れの里','postal'=>'8914292','address'=>'鹿児島県熊毛郡 屋久島町小瀬田849番地20','phone'=>'0489291111','email'=>'ame@naruto.jp','description'=>'地理的な理由からかねてより大国同士の戦場となることが多く、内政的には中々安定し難い事情を抱えていた雨隠れ。','access'=>'雨隠れの里駅前よりバス10分。歩けない距離ではないですが洪水が予想されますのでバスをご利用ください。','store_type_id'=>'3','area_id'=>'12'],
            ['store_name'=>'湯隠れの里','postal'=>'8795102','address'=>'大分県由布市湯布院町川上1503-3','phone'=>'0489292222','email'=>'yu@naruto.jp','description'=>'温泉と豊富な天然資源によって栄えているため、軍縮には好意的。ゆえに里の忍の練度は低いのが特徴的です。','access'=>'湯隠れの里駅前より徒歩5分。駅前の足湯にて旅の疲れをいやしつつお越しください。','store_type_id'=>'5','area_id'=>'12'],
            ['store_name'=>'霜隠れの里','postal'=>'8994201','address'=>'佐賀県唐津市屋形石','phone'=>'0489293333','email'=>'simo@naruto.jp','description'=>'霜隠れ(しもがくれ)の里は、木ノ葉隠れの里の北西にある里です。また湯隠れと雲隠れに挟まれて位置しています。','access'=>'霜隠れの里駅前より徒歩10分。夏でも霜が降りていますので厚底の靴でお越しください。','store_type_id'=>'3','area_id'=>'12'],
            ['store_name'=>'谷隠れの里','postal'=>'8470135','address'=>'鹿児島県霧島市霧島田口','phone'=>'0489294444','email'=>'tani@naruto.jp','description'=>'谷隠れ(たにがくれ)の里は、火の国と風の国の間に位置する里です。','access'=>'谷隠れの里駅前より専用ロープウェイにて15分。','store_type_id'=>'6','area_id'=>'12'],
            ['store_name'=>'星隠れの里','postal'=>'8340201','address'=>'福岡県八女市星野村10828-1','phone'=>'0489295555','email'=>'hosi@naruto.jp','description'=>'里には忍術を発動するためのエネルギーである“チャクラ”を増幅させる星が200年前に墜落していて、その星を他国の忍に狙われることもしばしば。','access'=>'星隠れの里駅前より徒歩10分。プラネタリウム付きバスが周回していますのでご利用ください。','store_type_id'=>'2','area_id'=>'12'],
            ['store_name'=>'石隠れの里','postal'=>'8115107','address'=>'長崎県壱岐市郷ノ浦町新田触870-3','phone'=>'0489296666','email'=>'isi@naruto.jp','description'=>'石隠れ(いしがくれ)の里は、土の国と風の国の間に位置する里です。','access'=>'石隠れの里駅前より徒歩15分。駅から当館まで石が続いていますので飛びながらお越しください。','store_type_id'=>'4','area_id'=>'12'],
        ];
        for ($i=0; $i < count($stores); $i++) {
            DB::table('users')->insert([
                $stores
            ]);
        }
        $store_image = [
            ['images/stores/hotel1.jpg', 'images/stores/hotel2.jpg', 'images/stores/hotel3.jpg']
        ];
        for ($i=0; $i < 15; $i++) {
            DB::table('images')->insert([
                $store_image
            ]);
        }

    }
}
