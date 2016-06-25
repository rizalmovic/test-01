<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'MainController@index', 'as' => 'index']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'postRegister']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);