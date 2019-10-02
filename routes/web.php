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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);

Route::post('/agregar', [
    'uses' => 'Page\HomepageController@agregar',
    'as' => 'agregar_path',
]);

Route::get('/load/packages', [
    'uses' => 'Page\HomepageController@load',
    'as' => 'load_path',
]);
