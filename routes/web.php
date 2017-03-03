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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/goals', 'GoalController@index');
Route::get('/goals/create', 'GoalController@create');
Route::get('/goals/{goal}', 'GoalController@show');
Route::post('/goals', 'GoalController@store');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');
Route::get('/tasks/create', 'TaskController@create');
Route::post('/tasks', 'TaskController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
