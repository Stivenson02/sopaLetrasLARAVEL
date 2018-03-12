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
    return view('play.login');
});

Route::get('/fin', function () {
    return view('play.continue');
});



Route::get('/home', 'HomeController@index');


Route::post('play', [
  'uses' => 'PlayController@index',
  'as' => 'play_paht'
]);

Route::post('level', [
  'uses' => 'PlayController@create',
  'as' => 'level_paht'
]);
Route::post('save_play', [
  'uses' => 'PlayController@store',
  'as' => 'save_play_paht'
]);

Route::post('continue', [
  'uses' => 'PlayController@show',
  'as' => 'continue_paht'
]);
