<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','MasterController@index');
Route::get('/qb','MasterController@indexall');
Route::get('/a','MasterController@analysis');
Route::post('/analysis','MasterController@postanalysis');
Route::get('/storage/see','MasterController@showStorage');
Route::get('/match/{mid}','MasterController@showMaster');
Route::get('test','MasterController@test');
Route::get('/matchList/{term}','MasterController@showMatchList');
Route::get('/ft/{mid}','MasterController@freshMatchList');
