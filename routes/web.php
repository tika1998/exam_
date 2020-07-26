<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task', 'TaskController@index')->name('task');
Route::post('/createTask', 'TaskController@store')->name('createTask');
Route::get('/showTask', 'TaskController@show')->name('showTask');
Route::get('/show/{id}', 'TaskController@showById')->name('show');
Route::get('/delete/{id}', 'TaskController@destroy')->name('delete');
