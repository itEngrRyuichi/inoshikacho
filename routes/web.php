<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ----- ホーム画面 ----- */
Route::get('/', 'HomeController@index');

/* ----- ログイン画面 ----- */
Route::get('/login', 'LoginController@index');

/* ----- ユーザー関係 ----- */
Route::resource('users', 'UserController');
/* プロフィール画面*/
Route::get('/profile', 'ProfileController@index');

/* ----- 店舗関係 ----- */
Route::resource('stores', 'StoreController');
/* 店舗内プラン */
Route::get('stores/{store_id}/plans/create', 'StorePlanController@create');
Route::post('stores/{store_id}/plans', 'StorePlanController@store');
Route::get('stores/{store_id}/plans/{id}/edit', 'StorePlanController@edit');
Route::put('stores/{store_id}/plans/{id}', 'StorePlanController@update');
Route::delete('stores/{store_id}/plans/{id}', 'StorePlanController@destroy');
/* 店舗内部屋 */
Route::get('stores/{store_id}/rooms/create', 'StoreRoomController@create');
Route::post('stores/{store_id}/rooms', 'StoreRoomController@store');
Route::get('stores/{store_id}/rooms/{id}/edit', 'StoreRoomController@edit');
Route::put('stores/{store_id}/rooms/{id}', 'StoreRoomController@update');
Route::delete('stores/{store_id}/rooms/{id}', 'StoreRoomController@destroy');
/* 店舗内コメント */
Route::get('stores/{store_id}/comments/create', 'StoreCommentController@create');
Route::post('stores/{store_id}/comments', 'StoreCommentController@store');
Route::delete('stores/{store_id}/comments/{id}', 'StoreCommentController@destroy');

/* ----- 予約関係 ----- */
/* 宿泊予約一覧 / 宿泊履歴(サイト管理側) */
Route::resource('reserves', 'ReserveController');
/* 宿泊予約履歴 / 宿泊履歴(会員側) */
Route::get('users/{user_id}/reserves', 'UserReserveController@index');
/* 宿泊予約履歴 / 宿泊履歴(店舗側) */
Route::get('stores/{store_id}/reserves', "StoreReserveController@index");
