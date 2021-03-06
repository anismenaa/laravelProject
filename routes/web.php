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

Route::get('/','WelcomeController@index');

Route::get('/login','LoginController@loginPage');
Route::post('/login/checklogin','LoginController@checklogin');
Route::get('/dashboard','LoginController@dashboard');
Route::get('/logout','LoginController@logout');

