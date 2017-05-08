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
Route::get('/phu',[
    'as' => 'name',
    'uses' => 'phuController@index'
]);
Route::get('/module-10',[
    'as' => 'name',
    'uses' => 'module_10_Controller@index'
]);
Route::get('/module-11',[
    'as' => 'name',
    'uses' => 'module_11_Controller@index'
]);
Route::get('/module-15',[
    'as' => 'name',
    'uses' => 'module_15_Controller@index'
]);
Route::get('/module-17',[
    'as' => 'name',
    'uses' => 'module_17_Controller@index'
]);
Route::get('/module-18',[
    'as' => 'name',
    'uses' => 'module_18_Controller@index'
]);
Route::get('/module-19',[
    'as' => 'name',
    'uses' => 'module_19_Controller@index'
]);
