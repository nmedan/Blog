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
use App\Post;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create')->name('create-post');

Route::get('/posts/{id}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{id}', 'CommentsController@store');

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store')->name('register');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/users/{id}', 'UsersController@show');

Route::get('/posts/tag/{tag}', 'TagsController@showPostsWithTag');

Route::get('/posts/destroy/{id}', 'PostController@destroy');
