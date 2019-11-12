<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api.', 'namespace' => 'Api'], function(){
    Route::post('login','AuthController@login');

    Route::group(['middleware' => 'token'], function(){
        Route::get('/tanaman', 'MandorController@getPlants');
        Route::get('/tanah', 'MandorController@getMyLands');
        Route::post('/tanah', 'MandorController@addLand');
        Route::get('/texture-tanah', 'MandorController@getTexture');
    });
});