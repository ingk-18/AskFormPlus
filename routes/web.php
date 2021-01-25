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
    return view('ask/index');
});

// Route::resource('asks','AskFormController')->only([
//     'index','show'
// ]);

//アプリ機能使用
Route::get('ask/index','AskFormController@index');
Route::post('ask/show','AskFormController@show');
Route::post('ask/consult','AskFormController@consult');



//ベーシック認証
Route::group(['middleware' => 'basicauth'], function() {
    //ユーザー登録
    Route::get('ask/create','AskFormController@create');
    Route::post('ask/show_admin','AskFormController@show_admin');
    Route::post('ask/store','AskFormController@store');
    //ユーザー情報編集
    Route::get('ask/show_edit','AskFormController@show_edit');
    Route::get('ask/show_detail/{id}','AskFormController@show_detail');
    Route::get('ask/edit/{id}','AskFormController@edit');
    Route::post('ask/edit_confirm/{id}','AskFormController@edit_confirm');
    Route::post('ask/update/{id}','AskFormController@update');
    //削除
    Route::post('ask/destroy/{id}','AskFormController@destroy');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
