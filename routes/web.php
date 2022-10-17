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

// 後台路由
Route::prefix('admin')->group(function () {
    // 後台登入頁面
    Route::get('public/login', 'Admin\PublicController@login');
    // 後台登入的驗證頁面
    Route::post('public/check', 'Admin\PublicController@check');
    // 後台登出頁面
    Route::get('public/logout', 'Admin\PublicController@logout');
    // 後台首頁
    Route::get('index/index', 'Admin\IndexController@index');
    Route::get('index/welcome', 'Admin\IndexController@welcome');
});
