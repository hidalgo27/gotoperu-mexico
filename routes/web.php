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

Route::get('/load/packages-all', [
    'uses' => 'Page\HomepageController@load_all',
    'as' => 'load_all_path',
]);

Route::post('/formulario-diseno', [
    'uses' => 'Page\HomepageController@formulario_diseno',
    'as' => 'formulario_diseno_path',
]);

Route::post('/formulario-detail', [
    'uses' => 'Page\HomepageController@formulario_detail',
    'as' => 'formulario_detail_path',
]);



//package
Route::get('/packages/', [
    'uses' => 'Page\HomepageController@packages',
    'as' => 'packages_path',
]);


//detail
Route::get('/paquetes/{url}', [
    'uses' => 'Page\HomepageController@detail',
    'as' => 'detail_path',
]);

//destinations
Route::get('/destination', [
    'uses' => 'Page\HomepageController@destination',
    'as' => 'destination_path',
]);
Route::get('/destination/{url}', [
    'uses' => 'Page\HomepageController@destination_show',
    'as' => 'destination_show_path',
]);

//category
Route::get('/category', [
    'uses' => 'Page\HomepageController@category',
    'as' => 'category_path',
]);
Route::get('/category/{url}', [
    'uses' => 'Page\HomepageController@category_show',
    'as' => 'category_show_path',
]);

//about
Route::get('/sobre-nosotros', [
    'uses' => 'Page\HomepageController@sobre_nosotros',
    'as' => 'sobre_nosotros_path',
]);

//faq
Route::get('/preguntas-frecuentes', [
    'uses' => 'Page\HomepageController@faq',
    'as' => 'faq_path',
]);

//testimonios
Route::get('/testimonios', [
    'uses' => 'Page\HomepageController@testimonios',
    'as' => 'testimonios_path',
]);


//responsabilidad
Route::get('/responsabilidad-social', [
    'uses' => 'Page\HomepageController@responsabilidad',
    'as' => 'responsabilidad_path',
]);
