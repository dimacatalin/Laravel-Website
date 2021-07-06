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
Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::get('/qanda','PagesController@qanda')->middleware('auth.adminuser');
Route::get('/vodreview','PagesController@vodreview')->middleware('auth.user');
Route::get('/feedback','PagesController@feedback')->middleware('auth.admin');


Route::resource('posts','PostsController')->middleware('auth.adminuser');
Auth::routes();

Route::resource('qandas','QandasController')->middleware('auth.adminuser');

Route::resource('/vodreviews','VodreviewsController', ['only' => ['update', 'delete', 'store']]);

Route::get('/vodreviews','VodreviewsController@index1')->middleware('auth.adminuser');
Route::get('/vodreviews/create','VodreviewsController@create')->middleware('auth.adminuser');
Route::get('/feedback','VodreviewsController@index2')->middleware('auth.adminuser');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth.admin');
