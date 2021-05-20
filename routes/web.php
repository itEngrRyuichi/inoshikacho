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
Route::get('/', 'App\Http\Controllers\HomeController@index');

/* ----- ユーザー関係 ----- */
Route::resource('users', 'App\Http\Controllers\UserController');

/* ----- 店舗関係 ----- */
Route::resource('stores', 'App\Http\Controllers\StoreController');
/* プラン */
Route::get('stores/{store_id}/plans/create', 'App\Http\Controllers\StorePlanController@create');
Route::post('stores/{store_id}/plans', 'App\Http\Controllers\StorePlanController@store');
Route::get('stores/{store_id}/plans/{id}/edit', 'App\Http\Controllers\StorePlanController@edit');
Route::put('stores/{store_id}/plans/{id}', 'App\Http\Controllers\StorePlanController@update');
Route::delete('stores/{store_id}/plans/{id}', 'App\Http\Controllers\StorePlanController@destroy');
/* 部屋 */
Route::get('stores/{store_id}/rooms/create', 'App\Http\Controllers\StoreRoomController@create');
Route::post('stores/{store_id}/rooms', 'App\Http\Controllers\StoreRoomController@store');
Route::get('stores/{store_id}/rooms/{id}/edit', 'App\Http\Controllers\StoreRoomController@edit');
Route::put('stores/{store_id}/rooms/{id}', 'App\Http\Controllers\StoreRoomController@update');
Route::delete('stores/{store_id}/rooms/{id}', 'App\Http\Controllers\StoreRoomController@destroy');
/* コメント */
Route::get('stores/{store_id}/comments/create', 'App\Http\Controllers\StoreCommentController@create');
Route::post('stores/{store_id}/comments', 'App\Http\Controllers\StoreCommentController@store');
Route::delete('stores/{store_id}/comments/{id}', 'App\Http\Controllers\StoreCommentController@destroy');

/* ----- 予約関係 ----- */
Route::resource('reserves', 'App\Http\Controllers\HomeController');
