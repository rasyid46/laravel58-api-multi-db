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


Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
	Route::group( [ 'prefix' => '{type}' ], function () {
        Route::post('login', 'LoginController@authenticate');
    });

	Route::group( [ 'prefix' => '{type}'  , 'middleware'=>'api.auth' ], function () {
        Route::get('user', 'LoginController@getAuthenticatedUser');
        Route::post('logout', 'LoginController@destroy');
    });
});
