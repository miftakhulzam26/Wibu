<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'Backend'], function () {
    Route::resource('index', 'IndexController');
    Route::resource('user', 'UserController');
    Route::resource('title', 'TitleController');
    Route::resource('chapter', 'ChapterController');
    Route::resource('genre', 'GenreController');
    Route::resource('tag', 'TagController');

});

Route::group(['namespace'=>'Frontend'], function () {
    Route::resource('findex', 'IndexController');
    Route::resource('profile', 'ProfileController');
    Route::resource('search', 'SearchController');
    Route::resource('ftitle', 'TitleController');
    Route::resource('ulogin', 'UloginController');
    Route::resource('rlogin', 'RloginController');
});
