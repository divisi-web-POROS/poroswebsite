<?php

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

// kalo udah mantap
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/develop', 'HomeController@index');

// kalo maintenance
Route::get('/', function(){
	return view('layouts.maintenance');
});
Route::get('/blog', 'HomeController@indexBlog');
Route::get('/blog/{blog}', 'HomeController@showBlog');
Route::post('/blog/{blog}/comment', 'HomeController@storeComment');
Route::get('/portofolio', 'HomeController@indexPortofolio');
Route::get('/portofolio/{portofolio}', 'HomeController@showPortofolio');

// route ke admin panel
Route::group(['prefix' => 'mimin'], function () {
    Voyager::routes();
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
