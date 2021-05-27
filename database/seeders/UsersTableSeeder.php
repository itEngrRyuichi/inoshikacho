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
        //
        //サイト管理ユーザ
        DB::table('users')->insert([
            'name'=>'shikamaru',
            'type'=>1,
            'birthday'=>'2021-05-24',
            'email'=>'shikamaru@shippuden.com',
            'phone'=>'000-0000-0000',
            'password'=>'shikamaru',
            'address'=>'東京都新宿区',
        ]);
        DB::table('images')->insert([
            'url' => 'images/users/shikamaru.jpg',
            'user_id' => 1
        ]);

        //店管理ユーザ
        DB::table('users')->insert([
            'name'=>'ino',
            'type'=>2,
            'birthday'=>'2021-05-24',
            'email'=>'ino@shippuden.com',
            'phone'=>'000-0000-0000',
            'password'=>'ino',
            'address'=>'東京都新宿区',
        ]);
        DB::table('images')->insert([
            'url' => 'images/users/ino.jpg',
            'user_id' => 2
        ]);

        //会員ユーザ
        DB::table('users')->insert([
            'name'=>'choji',
            'type'=>3,
            'birthday'=>'2021-05-24',
            'email'=>'choji@shippuden.com',
            'phone'=>'000-0000-0000',
            'password'=>'choji',
            'address'=>'東京都新宿区',
        ]);
        DB::table('images')->insert([
            'url' => 'images/users/choji.png',
            'user_id' => 3
        ]);
    }
}
