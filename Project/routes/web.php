<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    Route::prefix('dashboard')->group(function () {
        Route::resource('/', 'IndexController');
        Route::resource('user', 'UserController');
        Route::resource('title', 'TitleController');
        Route::resource('chapter', 'ChapterController');
        Route::resource('genre', 'GenreController');
        Route::resource('tag', 'TagController');
        Route::resource('title', 'TitleController');
    });
});

Route::group(['namespace'=>'Frontend'], function () {
    Route::resource('ftitle', 'TitleController');
    Route::resource('lpage', 'LpageController');
    Route::resource('ulogin', 'UloginController');
    Route::resource('sfinder', 'SfinderController');
    Route::resource('profu', 'UprofileController');
    Route::resource('lauth', 'PauthorController');
    Route::resource('ltitle', 'PtitleController');
    Route::resource('lgenre', 'PgenreController');
    Route::resource('ltag', 'PtagController');
    Route::resource('bmark', 'BookmarkController');
    Route::resource('gdesc', 'GdescController');
    Route::resource('tdesc', 'TdescController');
    Route::resource('addc', 'AddchapterController');


});
// Route::resource('posts', PostCRUDController::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadController@index');
Route::post('/upload/proses', 'UploadController@store');
