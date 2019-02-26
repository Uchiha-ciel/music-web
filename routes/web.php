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
Route::get('/genres', 'PagesController@genres');
Route::get('/events', 'PagesController@events');
Route::get('/listen', 'PagesController@listen');
Route::get('/video1', 'PagesController@video1');
Route::get('/video1detail','PagesController@videodetail');
Route::get('/administor','PagesController@administor');

Route::post('/form', 'RequestController@store');

Route::resource('songs', 'SongsController');
Route::resource('mvs', 'MvsController');
Route::resource('singers', 'SingersController');
Route::resource('comments', 'CommentsController');
Route::resource('albums', 'AlbumsController');
Route::resource('customers', 'CustomersController');

Auth::routes();

Route::get('/homeindex', 'HomeController@index');
Route::get('/home', 'HomeController@index');
