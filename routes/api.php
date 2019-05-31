<?php

use Illuminate\Http\Request;
use Dingo\Api\Facade\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    //'middleware' => 'wechat.oauth'
    Route::group([], function () use ($api) {
        $api->post('/user/bind', 'App\Api\V1\UserController@bind');
    });
});



