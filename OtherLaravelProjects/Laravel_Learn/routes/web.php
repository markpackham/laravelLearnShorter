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

/* We will see hello world if we go to http://localhost/laravel_learn/public/hello*/
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

/*
Dynamic parameters
If we go here http://localhost/laravel_learn/public/users/Mark/Packham
we get, This is user Mark Packham*/
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' . $id . ' ' . $name;
});

/*
Route::get('/', function () {
    return view('welcome');
});

// about is in our pages folder
Route::get('/about', function () {
    return view('pages.about');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//Create all the routes we need for the functions created which you can see by running in the terminal php artisan route:list
//eg posts.store post.create post.destory
Route::resource('posts','PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
