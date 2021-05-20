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

Route::get('/', function(){
    return view('welcome');
});

/* ----- ホーム画面 ----- */
/* Route::get('/', 'HomeController@index'); */

/* ----- ユーザー関係 ----- */
/* Route::resource('users', 'UserController'); */

/* ----- 店舗関係 ----- */
/* Route::resource('stores', 'StoreController'); */
/* プラン */
Route::get('stores/{store_id}/plans/create', 'App\Http\Controllers\StorePlanController@create');
Route::post('stores/{store_id}/plans', 'App\Http\Controllers\StorePlanController@store');
Route::get('stores/{store_id}/plans/{id}/edit', 'App\Http\Controllers\StorePlanController@edit');
Route::put('stores/{store_id}/plans/{id}', 'App\Http\Controllers\StorePlanController@update');
Route::delete('stores/{store_id}/plans/{id}', 'App\Http\Controllers\StorePlanController@destroy'); 
/* 部屋 */
/* Route::get('stores/{store_id}/rooms/create', 'StoreRoomController@create');
Route::post('stores/{store_id}/rooms', 'StoreRoomController@store');
Route::get('stores/{store_id}/rooms/{id}/edit', 'StoreRoomController@edit');
Route::put('stores/{store_id}/rooms/{id}', 'StoreRoomController@update');
Route::delete('stores/{store_id}/rooms/{id}', 'StoreRoomController@destroy'); 
/* コメント */
Route::get('stores/{store_id}/comments/create', 'App\Http\Controllers\StoreCommentController@create');
Route::post('stores/{store_id}/comments', 'App\Http\Controllers\StoreCommentController@store');
Route::delete('stores/{store_id}/comments/{id}', 'App\Http\Controllers\StoreCommentController@destroy'); 

/* ----- 予約関係 ----- */
/* Route::resource('reserves', 'HomeController'); */
