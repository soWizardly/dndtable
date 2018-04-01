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

#$config = ['middleware' => 'auth'];
#$config = [];

#Route::group($config, function () {
#    Route::get('testing', function(){#z
#		dd('hi');
#	});#
#	Route::get('api/testing', function(){
#		dd('hi2');
#	});
#}#);

#Route::middleware('auth:api')->get('/user', function (Request $request) {
#    return $request->user();
#});
