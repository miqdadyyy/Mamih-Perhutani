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

Auth::routes();
Route::redirect('/', '/login');
Route::get('/home', function(){
    if(\Illuminate\Support\Facades\Auth::user()->is('admin')){
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('mandor.dashboard');
    }
});

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/mandor', 'MandorController');
    Route::resource('/plant', 'PlantController');
    Route::resource('/land', 'LandController');

    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function(){
        Route::get('/plants', 'AjaxController@getPlants')->name('plants');
        Route::get('/lands', 'AjaxController@getLands')->name('lands');
    });
});

Route::group(['middleware' => ['role:mandor'], 'prefix' => 'mandor', 'as' => 'mandor.', 'namespace' => 'Mandor'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/land', 'LandController');

    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function(){
        Route::get('/lands', 'AjaxController@getLands')->name('lands');
    });
});