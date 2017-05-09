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
Route::get('/module-1',[
    'as' => 'name',
    'uses' => 'module_1_Controller@index'
]);
Route::get('/module-7',[
    'as' => 'name',
    'uses' => 'module_7_Controller@index'
]);
Route::get('/module-2',[
    'as' => 'name',
    'uses' => 'module_2_Controller@index'
]);
Route::get('/module-3',[
    'as' => 'name',
    'uses' => 'module_3_Controller@index'
]);
Route::get('/module-4',[
    'as' => 'name',
    'uses' => 'module_4_Controller@index'
]);
Route::get('/module-5',[
    'as' => 'name',
    'uses' => 'module_5_Controller@index'
]);
Route::get('/module-6',[
    'as' => 'name',
    'uses' => 'module_6_Controller@index'
]);
Route::get('/module-13',[
    'as' => 'name',
    'uses' => 'module_13_Controller@index'
]);
Route::get('/module-8',[
    'as' => 'name',
    'uses' => 'module_8_Controller@index'
]);
Route::get('/module-9',[
    'as' => 'name',
    'uses' => 'module_9_Controller@index'
]);
Route::get('/module-12',[
    'as' => 'name',
    'uses' => 'module_12_Controller@index'
]);
Route::get('/module-14',[
    'as' => 'name',
    'uses' => 'module_14_Controller@index'
]);
