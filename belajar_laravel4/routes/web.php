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
Route::get('user','ManagementUserController@index');
Route::resource('user','ManagementUserController');
Route::get("/home", function(){
    return view("home");
});
Route::resource('home', 'Frontend\HomeController');
Route::group(['namespace'=>'Backend'], function(){
    Route::resource('dashboard', 'DashboardController');
});
