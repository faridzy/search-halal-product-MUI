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

Route::get('/', 'Backend\BackendController@actionIndex')->middleware('verify-login');
Route::get('login', 'LoginController@actionIndex');
Route::get('logout', 'LoginController@actionLogout');
Route::post('validate-login', 'LoginController@actionLogin');
Route::group(['prefix' => 'backend', 'namespace' => 'Backend','middleware' => 'verify-login'], function () {
    Route::get('/', 'BackendController@actionIndex');
    Route::group(['prefix' => 'product', 'namespace' => 'Product','middleware' => 'verify-login'], function () {
        Route::get('/', 'ProductHalalController@actionIndex');
        Route::post('/view', 'ProductHalalController@actionView');
    });
});