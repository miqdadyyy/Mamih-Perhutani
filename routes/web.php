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

//		login 		//

Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');

//		endlogin 		//

//		regist 		//

Route::get('/pendaftaran-mandor','RegisterMandorController@index');

Route::post('/kirim/pendaftaran','RegisterMandorController@insert');

//		endregist 		//