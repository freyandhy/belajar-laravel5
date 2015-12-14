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

Route::get('bahan','BahanController@index');
Route::get('bahan/create','BahanController@create');
Route::post('bahan/create',array('before' => 'csrf', 'uses' => 'BahanController@create'));
Route::get('bahan/update/{id}','BahanController@update');
Route::post('bahan/update/{id}',array('before' => 'csrf', 'uses' => 'BahanController@update'));
Route::get('bahan/delete/{id}','BahanController@delete');

Route::get('resep','ResepController@index');
Route::get('resep/create','ResepController@create');
Route::post('resep/create',array('before' => 'csrf', 'uses' => 'ResepController@create'));
Route::get('resep/update/{id}','ResepController@update');
Route::post('resep/update/{id}',array('before' => 'csrf', 'uses' => 'ResepController@update'));
Route::get('resep/delete/{id}','ResepController@delete');

Route::get('koki','KokiController@index');
Route::get('koki/create','KokiController@create');
Route::post('koki/create',array('before' => 'csrf', 'uses' => 'KokiController@create'));
Route::get('koki/update/{id}','KokiController@update');
Route::post('koki/update/{id}',array('before' => 'csrf', 'uses' => 'KokiController@update'));
Route::get('koki/delete/{id}','KokiController@delete');