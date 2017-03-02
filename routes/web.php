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

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/users', 'UserController@index');
    Route::get('/addUsers', 'UserController@addUser');
    Route::get('/editUsers/{id}', 'UserController@editUser');
    Route::delete('deleteUser/{id}', 'UserController@delete');
    Route::post('/updateUser/{id}', 'UserController@updateUser');
    Route::post('/postUsers', 'UserController@postUser');
    Route::get('/projects', 'ProjectsController@index');
    Route::get('/addProjects', 'ProjectsController@projects');
    Route::get('/editProjects/{id}', 'ProjectsController@edit');
    Route::delete('/deleteProject/{id}', 'ProjectsController@delete');
    Route::post('/postProjects', 'ProjectsController@postProjects');
    Route::post('/updateProject/{id}','ProjectsController@update');
    Route::get('/adminMaterials', 'DashboardController@material');
    Route::get('/addMaterial/{id}', 'DashboardController@addMaterial');
    Route::post('/sendMaterial/{id}', 'DashboardController@sendMaterial');
    Route::get('/viewStatus/{id}', 'DashboardController@viewStatus');

});

Route::group(['middleware' => 'manager'], function() {
    Route::get('/mdashboard', 'ManDashboardController@index');
    Route::get('/managerProjects', 'ManDashboardController@projects');
    Route::get('/projectProgress/{id}', [
        'uses' => 'ManDashboardController@progress',
        'as' => 'projectProgress',]);
    Route::post('/postProgress/{id}', [
        'uses' => 'ManDashboardController@postProgress',
        'as' => 'postProgress',]);
    Route::get('/progress', 'ManDashboardController@getProgress');
    Route::get('/materials', 'ManDashboardController@material');
    Route::get('/viewMaterials/{id}', 'ManDashboardController@viewMaterials');
    Route::post('/checkReceipt/{id}', 'ManDashboardController@checkReceipt');
    Route::get('/displayProgress/{id}', 'ManDashboardController@displayProgress');
    Route::get('/editProgress/{id}', 'ManDashboardController@editProgress');
    Route::post('/updateProgress/{id}', 'ManDashboardController@updateProgress');
});
