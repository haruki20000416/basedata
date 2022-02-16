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
Route::get('/informations','PostController@create');
Route::post('/informations', 'PostController@store');
Route::get('/informations/{information}', 'PostController@view');
Route::get('/games','PostController@gamecreate');
Route::post('/games', 'PostController@gamestore');
Route::get('/game/{game}','PostController@gamereturn'); //多分いらない
Route::post('/pichers','PostController@picherstore');
Route::get('/picher','PostController@pichercreat');
Route::get('/pichers/view/{picher}','DataController@dataview');
Route::get('/pichers/{picher}','PostController@picherview');
Route::get('/pichers/{picher}/edit', 'PostController@edit');
Route::put('/pichers/{picher}', 'PostController@update');
Route::get('/games/id','PostController@show');
// LINE メッセージ受信
Route::post('/line/webhook', 'LineMessengerController@webhook')->name('line.webhook');
 
// LINE メッセージ送信用
Route::get('/line/message', 'LineMessengerController@message');