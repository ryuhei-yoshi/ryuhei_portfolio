<?php

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

// 一覧ページ
Route::get('/', 'CatsController@index');

// ユーザー登録
Route::get('/user/create', 'Auth\RegisterController@showRegistrationForm')->name('user.create');
Route::post('/user/create', 'Auth\RegisterController@register')->name('user.store');

// ユーザーログイン登録
Route::get('/user/login', 'Auth\LoginController@showLoginForm')->name('user.login.show');
Route::post('/user/login', 'Auth\LoginController@login')->name('user.login');

// 猫の詳細ページ
Route::get('cat/show/{id}', 'CatsController@show')->name('cat.show');

// 猫の登録ページ
Route::get('cat/create', 'CatsController@create')->name('cat.create');
Route::post('cat', 'CatsController@store')->name('cat.store');
