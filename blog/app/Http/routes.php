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
    Route::any('login','LoginController@login');
    Route::any('code','LoginController@code');
});
Route::group(['middleware'=>['web','admin.login'],'namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::any('index','IndexController@index');
    Route::any('quit','IndexController@quit');
});
