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

Route::get('/', 'WebController@index')->name('web.home');
Route::get('/musicas', 'WebController@musics')->name('web.musics');
Route::get('/videos', 'WebController@videos')->name('web.videos');
Route::get('/shows', 'WebController@shows')->name('web.shows');
Route::get('/shows/{id}', 'WebController@show')->name('web.show');
Route::get('/contato', 'WebController@contact')->name('web.contact');
