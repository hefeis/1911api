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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vx/text','Vx\TextController@token');
Route::get('/vx/text2','Vx\TextController@token2');
Route::get('/vx/text3','Vx\TextController@token3');