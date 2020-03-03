<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/addpost', function () {
    return view('newpost');
})->name('form');

Route::post('/addpost', 'PostController@add')->name('addpost');
Route::get('/del/{id}', 'PostController@delete')->name('delete');
Route::get('/edit/{id}', 'PostController@edit')->name('edit');
Route::post('/edit/{id}', 'PostController@update')->name('update');

Route::get('/post/{id}', 'PostController@single')->name('singlepost');

Route::get('/addcomment/{id}', 'PostController@newcomment')->name('newcomment');
Route::post('/addcomment/{idpost}', 'PostController@addcomment')->name('addcomment');
