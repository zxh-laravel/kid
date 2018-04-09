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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/act', 'ActController@index')->name('act');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/school', 'SchoolController@index')->name('school');



//admin 管理后台
//Route::prefix('admin')->middleware('auth')->group(function () {
//    Route::get('/', 'Admin\IndexController@index');
//});
Route::prefix('admin')->group(function () {
    Route::post('/upload', 'Admin\UploadController@index');

    Route::get('/', 'Admin\SchoolController@index');
    Route::put('/{id}', 'Admin\SchoolController@update');

    Route::get('/cms', 'Admin\CmsController@index');
    Route::post('/cms', 'Admin\CmsController@store');
    Route::get('/cmsCreate', 'Admin\CmsController@create');
    Route::get('/cms/{id}', 'Admin\CmsController@show');
    Route::delete('/cms/{id}', 'Admin\CmsController@destroy');
    Route::put('/cms/{id}', 'Admin\CmsController@update');
});