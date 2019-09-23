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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PostsController@index');


/*Route::get('/about', function () {
    return view('about');
    //return "This is about us page";
});*/


// old school routing with controller
Route::get('/about/{id}/{name}', 'AboutController@index');

// you can also pass local parameters 
Route::get('/posts/{id}', 'PostsController@index');

// view data and search
Route::get('/search', 'PostsController@search');
