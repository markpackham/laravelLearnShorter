<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List articles
Route::get('articles','ArticleController@index');

//List singe article
Route::get('articles/{id}','ArticleController@show');

//Create new article (notice use of article and not articles)
Route::post('article','ArticleController@store');

//Update article (notice use of article and not articles)
Route::put('article','ArticleController@store');

//Delete article
Route::delete('articles/{id}','ArticleController@destroy');
