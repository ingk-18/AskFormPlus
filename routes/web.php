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

// Route::resource('asks','AskFormController')->only([
//     'index','show'
// ]);

Route::get('ask/index','AskFormController@index');
Route::post('ask/show','AskFormController@show');
Route::post('ask/consult','AskFormController@consult');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
