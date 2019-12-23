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
    Route::resource('articles','ArticleController');
    Route::resource('teachers','TeacherController');
    Route::resource('single','SingleMenuController');
    Route::resource('single-post','SinglePostController');
    Route::resource('tasks','TaskController');
    Route::resource('files','FileController');
});

Route::group(array('prefix' => '/'),function ()
{
    Route::get('/', 'FrontendController@index');
    Route::get('/contact', 'FrontendController@contact');
    Route::get('/about', 'FrontendController@about');
    Route::get('/post/{id}', 'FrontendController@post');
    Route::get('course/{id}', 'FrontendController@course');
    Route::get('journal/{id}', 'FrontendController@journal');
    Route::get('news/{id}', 'FrontendController@news');
    Route::get('article/{id}/{slug}', 'FrontendController@article');
    Route::get('teachers', 'FrontendController@teachers');
    Route::get('/single-post/{id}', 'FrontendController@singlePost');
});

Route::get('/foo', function () {
    $exitCode = Illuminate\Support\Facades\Artisan::call('storage:link', [

    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
