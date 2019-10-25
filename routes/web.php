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

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('dashboard', 'AdminController@index');
    Route::post('news/store', 'NewsController@store');
    Route::resource('news','NewsController');
});

Route::group(array('prefix' => '/'),function ()
{
    Route::get('/', 'FrontendController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
