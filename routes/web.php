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
Route::get('/', 'HomeController@index')->name('index');

/* ----- ログイン画面 ----- */
Route::get('login', 'LoginController@index')->name('login.index');
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout', 'LoginController@logout')->name('logout');

/* ----- ユーザー関係 ----- */
Route::resource('users', 'UserController');
Route::get('users/{user_id}/stores', 'UserStoreController@index')->name('users.stores.index')->middleware('store');

/* プロフィール画面*/
Route::get('profile', 'ProfileController@index')->name('profile.index')->middleware('auth');
Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.edit')->middleware('auth');
Route::put('profile/{id}', 'ProfileController@update')->name('profile.update')->middleware('auth');

/* ----- 店舗関係 ----- */
Route::resource('stores', 'StoreController');
/* 店舗内プラン */
Route::get('stores/{store_id}/plans/create', 'StorePlanController@create')->name('stores.plans.create')->middleware('store');
Route::post('stores/{store_id}/plans', 'StorePlanController@store')->name('stores.plans.store')->middleware('store');
Route::get('stores/{store_id}/plans/{id}/edit', 'StorePlanController@edit')->name('stores.plans.edit')->middleware('store');
Route::put('stores/{store_id}/plans/{id}', 'StorePlanController@update')->name('stores.plans.update')->middleware('store');
Route::delete('stores/{store_id}/plans/{id}', 'StorePlanController@destroy')->name('stores.plans.destroy')->middleware('store');
/* 店舗内部屋 */
Route::get('stores/{store_id}/rooms/create', 'StoreRoomController@create')->name('stores.rooms.create')->middleware('store');
Route::post('stores/{store_id}/rooms', 'StoreRoomController@store')->name('stores.rooms.store')->middleware('store');
Route::get('stores/{store_id}/rooms/{id}/edit', 'StoreRoomController@edit')->name('stores.rooms.edit')->middleware('store');
Route::put('stores/{store_id}/rooms/{id}', 'StoreRoomController@update')->name('stores.rooms.update')->middleware('store');
Route::delete('stores/{store_id}/rooms/{id}', 'StoreRoomController@destroy')->name('stores.rooms.destroy')->middleware('store');
/* 店舗内コメント */
Route::get('stores/{store_id}/comments/create', 'StoreCommentController@create')->name('stores.comments.create')->middleware('member');
Route::post('stores/{store_id}/comments', 'StoreCommentController@store')->name('stores.comments.store')->middleware('member');
Route::delete('stores/{store_id}/comments/{id}', 'StoreCommentController@destroy')->name('stores.comments.destroy')->middleware('member');

/* ----- 予約関係 ----- */
Route::get('reserves/create', 'ReserveController@create')->name('reserves.create')->middleware('member');
Route::post('reserves', 'ReserveController@store')->name('reserves.store')->middleware('member');
Route::get('reserves/{reserf}', 'ReserveController@edit')->name('reserves.edit')->middleware('auth');
Route::put('reserves/{reserf}', 'ReserveController@update')->name('reserves.update')->middleware('auth');
Route::get('reserves/{reserf}', 'ReserveController@show')->name('reserves.show')->middleware('auth');

/* 宿泊予約一覧 / 宿泊履歴(サイト管理側) */
// Route::resource('reserves', 'ReserveController')->middleware('admin');
Route::get('reserves', 'ReserveController@index')->name('reserves.index')->middleware('admin');
/* 宿泊予約履歴 / 宿泊履歴(会員側) */
Route::get('users/{user_id}/reserves', 'UserReserveController@index')->name('users.reserves.index')->middleware('member');
/* 宿泊予約履歴 / 宿泊履歴(店舗側) */
Route::get('stores/{store_id}/reserves', "StoreReserveController@index")->name('stores.reserves.index')->middleware('store');
