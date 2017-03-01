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
Route::get('/goals/{goal}', 'GoalController@show');
Route::get('/goals/create', 'GoalController@create');
Route::post('/goals', 'GoalController@store');



Auth::routes();

Route::get('/home', 'HomeController@index');
