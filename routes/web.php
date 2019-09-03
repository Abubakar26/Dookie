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
Route::get('/', 'pages@index');
Route::get('/home','pages@home');
Route::post('/file','upload@bhejo');
Route::get ('/post','upload@getdata')->name('post');
Route::get('/delete/{id}','upload@delete');
Route::post('/about','Infocontroller@About');
Route::get('/table','upload@tables');
Route::post('/info','upload@infoupdate');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');    
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProvidergoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackgoogle');

