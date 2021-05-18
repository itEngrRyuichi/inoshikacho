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

/* ----- ユーザー関係 ----- */
Route::resource('users', 'UserController');

/* ----- 店舗関係 ----- */
Route::resource('stores', 'StoreController');
/* プラン */
Route::get('stores/{store_id}/plans/create', 'StorePlanController@create');
Route::post('stores/{store_id}/plans', 'StorePlanController@store');
Route::get('stores/{store_id}/plans/{id}/edit', 'StorePlanController@edit');
Route::put('stores/{store_id}/plans/{id}', 'StorePlanController@update');
/* 部屋 */
Route::get('stores/{store_id}/rooms/create', 'StoreRoomController@create');
Route::post('stores/{store_id}/rooms', 'StoreRoomController@store');
Route::get('stores/{store_id}/rooms/{id}/edit', 'StoreRoomController@edit');
Route::put('stores/{store_id}/rooms/{id}', 'StoreRoomController@update');
/* コメント */
Route::get('stores/{store_id}/comments/create', 'StoreCommentController@create');
Route::post('stores/{store_id}/comments', 'StoreCommentController@store');

/* ----- 予約関係 ----- */
Route::resource('reserves', 'HomeController');
