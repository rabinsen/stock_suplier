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

Route::post('/logout', 'LoginController@logout');

Route::get('/dashboard', 'DashboardController@index')->middleware('admin');
Route::get('/users', 'UserController@index')->middleware('admin');
Route::get('/addUsers', 'UserController@addUser')->middleware('admin');
Route::post('/postUsers', 'UserController@postUser')->middleware('admin');;
Route::get('/projects', 'ProjectsController@index')->middleware('admin');;
Route::get('/addProjects', 'ProjectsController@projects')->middleware('admin');;
Route::post('/postProjects', 'ProjectsController@postProjects')->middleware('admin');;

//Route::post('/managerDashboard, ')