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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('/mahasiswa', 'App\Http\Controllers\ApiController@all');
    $api->get('/hallo2', function (){
        echo "Hallo world 2";
    });
});


Route::get('/hallo', function(){
    echo "Hello world";
});
