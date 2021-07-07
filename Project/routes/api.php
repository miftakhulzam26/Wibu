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

        //Route Api Chapter
        $api->get('chapter','ApiChapterController@index');
        $api->get('chapter/{id}', 'ApiChapterController@show');
        $api->post('chapter', 'ApiChapterController@create');
        $api->put('chapter/{id}/update', 'ApiChapterController@update');
        $api->delete('chapter/{id}/delete', 'ApiChapterController@delete');

        //Route Api Comment
        $api->get('comment','ApiCommentController@index');
        $api->get('comment/{id}', 'ApiCommentController@show');
        $api->post('comment', 'ApiCommentController@create');
        $api->put('comment/{id}/update', 'ApiCommentController@update');
        $api->delete('comment/{id}/delete', 'ApiCommentController@delete');

        //Route Api Creator
        $api->get('creator','ApiCreatorController@index');
        $api->get('creator/{id}', 'ApiCreatorController@show');
        $api->post('creator', 'ApiCreatorController@create');
        $api->put('creator/{id}/update', 'ApiCreatorController@update');
        $api->delete('creator/{id}/delete', 'ApiCreatorController@delete');

        //Route Api Genre
        $api->get('genre','ApiGenreController@index');
        $api->get('genre/{id}', 'ApiGenreController@show');
        $api->post('genre', 'ApiGenreController@create');
        $api->put('genre/{id}/update', 'ApiGenreController@update');
        $api->delete('genre/{id}/delete', 'ApiGenreController@delete');

        //Route Api Genre Title
        $api->get('gtitle','ApiGenreTitleController@index');
        $api->get('gtitle/{id}', 'ApiGenreTitleController@show');
        $api->post('gtitle', 'ApiGenreTitleController@create');
        $api->put('gtitle/{id}/update', 'ApiGenreTitleController@update');
        $api->delete('gtitle/{id}/delete', 'ApiGenreTitleController@delete');

        //Route Api Tag Title
        $api->get('ttitle','ApiTagTitleController@index');
        $api->get('ttitle/{id}', 'ApiTagTitleController@show');
        $api->post('ttitle', 'ApiTagTitleController@create');
        $api->put('ttitle/{id}/update', 'ApiTagTitleController@update');
        $api->delete('ttitle/{id}/delete', 'ApiTagTitleController@delete');

        //Route Api Reply
        $api->get('reply','ApiReplyController@index');
        $api->get('reply/{id}', 'ApiReplyController@show');
        $api->post('reply', 'ApiReplyController@create');
        $api->put('reply/{id}/update', 'ApiReplyController@update');
        $api->delete('reply/{id}/delete', 'ApiReplyController@delete');

        //Route Api Review
        $api->get('review','ApiReviewController@index');
        $api->get('review/{id}', 'ApiReviewController@show');
        $api->post('review', 'ApiReviewController@create');
        $api->put('review/{id}/update', 'ApiReviewController@update');
        $api->delete('review/{id}/delete', 'ApiReviewController@delete');

        //Route Api Title
        $api->get('title','ApiTitleController@index');
        $api->get('title/{id}', 'ApiTitleController@show');
        $api->post('title', 'ApiTitleController@create');
        $api->put('title/{id}/update', 'ApiTitleController@update');
        $api->delete('title/{id}/delete', 'ApiTitleController@delete');

        //Route Api Tag
        $api->get('tag','ApiTagController@index');
        $api->get('tag/{id}', 'ApiTagController@show');
        $api->post('tag', 'ApiTagController@create');
        $api->put('tag/{id}/update', 'ApiTagController@update');
        $api->delete('tag/{id}/delete', 'ApiTagController@delete');
    });
});
