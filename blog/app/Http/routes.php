<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']],function(){
    Route::any('admin/login','Admin\LoginController@login');
    Route::get('admin/code','Admin\LoginController@code');
});
Route::group(['middleware'=>['web','admin.login'],'namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::get('index','IndexController@index');
    Route::get('quit','LoginController@quit');
    Route::get('info','IndexController@info');
});
