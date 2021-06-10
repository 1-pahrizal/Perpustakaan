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
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){

Route::get('/dashboard','DashboardController@index');
Route::get('/peminjam','PeminjamController@index');
Route::post('/peminjam/create','PeminjamController@create');
Route::get('/peminjam/{id}/edit','PeminjamController@edit');
Route::post('/peminjam/{id}/update','PeminjamController@update');
Route::get('/peminjam/{id}/delete','PeminjamController@delete');

});