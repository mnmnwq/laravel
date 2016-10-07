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
Route::group(['middleware'=>['web']],function(){

});

Route::get('/','Home\IndexController@index');
Route::get('/cate/{cate_id}','Home\IndexController@cate');
Route::get('/a/{art_id}','Home\IndexController@article');

Route::any('admin/login','Admin\LoginController@login');
Route::get('admin/code','Admin\LoginController@code');

Route::group(['middleware'=>['admin.login'],'namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::get('index','IndexController@index');
    Route::get('quit','LoginController@quit');
    Route::get('info','IndexController@info');
    Route::any('pass','IndexController@pass');

    Route::post('cate/change_order','CategoryController@change_order');
    Route::post('links/change_order','LinksController@change_order');
    Route::post('navs/change_order','NavsController@change_order');
    Route::post('config/change_order','ConfigController@change_order');
    Route::post('config/change_content','ConfigController@change_content');
    Route::get('config/putFile','ConfigController@putFile');

    Route::resource('category','CategoryController');
    Route::resource('article','ArticleController');
    Route::resource('links','LinksController');
    Route::resource('navs','NavsController');
    Route::resource('config','ConfigController');

    Route::any('upload','CommonController@upload');
});
