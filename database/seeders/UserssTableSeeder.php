<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //サイト管理ユーザ
        DB::table('users')->insert(['name'=>'admin',
                                    'type'=>1,
                                    'age'=>'22',
                                    'email'=>'admin@example.com',
                                    'phone_number'=>'000-0000-0000',
                                    'password'=>'admin',
                                    'address'=>'東京都新宿区',
                                    ]);
        //店管理ユーザ
        DB::table('users')->insert(['name'=>'asuma',
                                    'type'=>2,
                                    'age'=>'22',
                                    'email'=>'admin@example.com',
                                    'phone_number'=>'000-0000-0000',
                                    'password'=>'asuma',
                                    'address'=>'東京都新宿区',
                                    ]);
        //会員ユーザ
        DB::table('users')->insert(['name'=>'test',
                                    'type'=>3,
                                    'age'=>'22',
                                    'email'=>'admin@example.com',
                                    'phone_number'=>'000-0000-0000',
                                    'password'=>'test',
                                    'address'=>'東京都新宿区',
                                    ]);
    }
}
