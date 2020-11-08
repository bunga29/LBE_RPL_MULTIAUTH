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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'HomeController@dashboardAdmin')->middleware('onlyAdmin')->name('dashboardAdmin');
Route::get('/salahrole', 'HomeController@salah')->name('salahrole');
Route::get('/ouser/index', 'HomeController@dashboardOuser')->middleware('onlyOuser')->name('dashboardOuser');
