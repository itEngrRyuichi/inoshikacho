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

/* ----- プロフィール画面 ----- */
Route::get('/profile', 'ProfileController@index');

/* ----- ユーザー関係 ----- */
Route::resource('users', 'UserController');

/* 予約関係(会員側) ----- */
Route::get('users/{user_id}/reserves', 'UserReserveController@index');

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
/* 店舗内宿泊予約関係 */
Route::resource('stores/{store_id}/reserves', "StoreReserveController");

/* ----- 予約関係(サイト管理側) ----- */
Route::get('reserves', 'ReserveController@index');
