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
Route::post('/match/{mid}','MasterController@postMid');
Route::group(['prefix'=>'test'],function(){
	Route::get('/','MasterController@test');
	Route::get('/match/chart/{id}','MasterController@showChart');
	Route::get('/test',function(){
		return view('testview');
	});
	Route::get('/ajax','TestController@ajax');
});

Route::get('/matchList/{term}','MasterController@showMatchList');
Route::get('/match/chart/{mid}','MasterController@showChart');
Route::get('/ft/{list}','MasterController@freshMatchList');
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){;
	Route::resource('/cache','AdminCacheController');
	Route::get('/document','AdminController@getFile');
	Route::get('/complete','AdminController@getUnComplete');
});
