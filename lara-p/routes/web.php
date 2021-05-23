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

Auth::routes();

// 一覧ページ
Route::get('/', 'CatsController@index');

Route::group(['prefix' => 'user'], function(){
    // ユーザー登録
    Route::get('create', 'Auth\RegisterController@showRegistrationForm')->name('user.create');
    Route::post('create', 'Auth\RegisterController@register')->name('user.store');
    
    // ユーザーログイン登録
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('user.login.show');
    Route::post('login', 'Auth\LoginController@login')->name('user.login');
    Route::get('logout', 'Auth\LoginController@logout')->name('user.logout');
});

// ユーザー詳細
Route::get('/users/{id}', 'UsersController@show')->name('user.show');

// 猫の詳細ページ
Route::get('cat/show/{id}', 'CatsController@show')->name('cat.show');

// adminルート
Route::group(['prefix' => 'admin'], function(){
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin_auth.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin_auth.register');
    Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::get('home', 'CatsController@adminIndex')->name('admin_auth.home');
    Route::get('{id}', 'Admin\HomeController@show')->name('admin.show');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin_auth.logout');

    // 猫の登録ページ
    Route::get('cat/create', 'CatsController@create')->name('cat.create');
    Route::post('cat', 'CatsController@store')->name('cat.store');
});
