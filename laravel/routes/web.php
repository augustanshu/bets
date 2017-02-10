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
Route::get('/a','MasterController@analysis');
Route::post('/analysis','MasterController@postanalysis');
//Route::get('/{mid}','MasterController@showMaster');
Route::get('/storage/see','MasterController@showStorage');
Route::get('/match/{mid}','MasterController@seeMatch');
Route::get('test','MasterController@test');
