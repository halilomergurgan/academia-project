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
    Route::resource('news','NewsController');
    Route::resource('slider','SliderController');
    Route::resource('courses','CourseController');
    Route::resource('magazines','MagazineController');
    Route::resource('about','AboutController');
    Route::resource('contact','ContactController');
    Route::resource('menu','MenuController');
    Route::resource('submenu','SubMenuController');
    Route::resource('posts','PostController');
});

Route::group(array('prefix' => '/'),function ()
{
    Route::get('/', 'FrontendController@index');
    Route::get('/contact', 'FrontendController@contact');
    Route::get('/about', 'FrontendController@about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
