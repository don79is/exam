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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'home', 'middleware' => ['auth', 'user-check']], function () {
    Route::get('/', ['as' => 'app.posts.index', 'uses' => 'EXPostsController@index']);
    Route::get('/posts', ['as' => 'app.posts.create', 'uses' => 'EXPostsController@create']);
    Route::post('/posts', ['as' => 'app.posts.store', 'uses' => 'EXPostsController@store']);
    Route::group(['prefix' => '{id}'], function () {
        Route::get('/', ['as' => 'app.posts.show', 'uses' => 'VRCategoriesController@adminShow']);
    });
});