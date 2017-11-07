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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'BlogController@index');

Route::get('dekus', 'BlogController@index');
Route::get('dekus/{slug}', 'BlogController@showPost');

// Admin area
Route::get('admin', function () {
    return redirect('/admin/post');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

