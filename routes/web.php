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

Route::redirect('/', '/login');

Route::get('/daftar-mandor', function () {
    return view('public.daftar');
});

Route::get('/form-kecocokan', 'CocokController@index');

Route::post('/send/hitung', 'CocokController@hitung');

Route::get('/show', 'CocokController@');

// Route::post('/kirim/pendaftaran','RegisterMandorController@insert');

Route::get('/login', 'AuthController@index');

Route::post('/send/registration', 'RegisterMandorController@insert');

Route::post('/postlogin', 'AuthController@postlogin');

Route::get('/logout', 'AuthController@logout');

//===||login SEMUA||===// 

Route::group(['middleware' => ['auth', 'checkRole:mandor,bos']], function () {

    Route::get('/home', 'AuthController@role');


});

//===||login MANDOR||===// 

Route::group(['middleware' => ['auth', 'checkRole:mandor']], function () {

    Route::get('/profile', 'ProfilController@indexMandor');

    Route::redirect('/home', '/profile');
    Route::post('/profile', 'ProfilController@updateMandor');
    Route::post('/password', 'ProfilController@updatePassword');
});
