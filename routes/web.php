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



Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kandidat_show', 'kandidat_showController@index');
Route::get('/visi-misi', 'VisiMisiController@index');
Route::get('/vote', 'voteController@index');
Route::post('/voting', 'voteController@vote');

//Admin
Route::get('/admin', 'AdminController@index');

Route::get('my-chart', 'ChartController@index');