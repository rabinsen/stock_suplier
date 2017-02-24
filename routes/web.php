<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [
    'uses' => 'RegisterController@register'
]);

Route::post('/register', [
    'uses' => 'RegisterController@postRegister'
]);

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/users', 'UserController@index');
Route::get('/addUsers', 'UserController@addUser');
Route::post('/postUsers', 'UserController@postUser');

Route::get('projects', 'ProjectsController@index');
Route::get('addProjects', 'ProjectsController@projects');