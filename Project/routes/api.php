<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function ($id) {

});

//Route::get('CommentController@index');
//Route::put('comment/{id}/update', 'CommentController@update');
//Route::post('comment', 'CommmentController@create');
//Route::delete('comment/{id}/delete', 'CommentController@delete');
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    // All routes goes here
    $api->get('test', function() {
        return 1;
   });
    $api->group(['namespace' => 'App\Http\Controllers\Api'], function() use($api) {

        $api->get('comment','CommentController@index');
        //api->get('comment/{id}', 'CommentController@show');
        $api->post('comment', 'CommentController@create');
        $api->put('comment/{id}/update', 'CommentController@update');
        $api->delete('comment/{id}/delete', 'CommentController@delete');

    });
});
