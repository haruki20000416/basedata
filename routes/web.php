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

Route::get('/', 'PostController@index');
Route::get('/picher', 'PostController@show');
Route::get('/informations','PostController@create');
Route::post('/informations', 'PostController@store');
Route::get('/informations/{information}', 'PostController@view');
Route::get('/informations/{information}/games','PostController@gamecreate');
Route::post('/informations/{information}/games', 'PostController@gamestore');
Route::post('/pichers','PostController@picherstore');
Route::get('/picher','PostController@pichercreat');
Route::get('/pichers/{picher}','PostController@picherview');