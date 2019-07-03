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

Auth::routes();

Route::get('/', 'PostController@index');
Route::get('/home', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('/posts/show/{post}', 'PostController@show');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/delete/{post}', 'PostController@destroy');

Route::post('/posts/store', 'PostController@store');
Route::post('/posts/comment/store/{id}', 'CommentController@store');
Route::get('/comments/delete/{comment}', 'CommentController@destroy');
