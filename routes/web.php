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
    return redirect()->route('login');
});

//Auth::routes();

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('admin.login');
Route::post('/beranda','Auth\LoginController@logout')->name('logout');

Route::get('/beranda', 'DashboardController@index')->name('dashboard');
Route::get('/penimbangan','CargoController@index')->name('cargo');

Route::get('/laporan','ReportController@index')->name('report');
