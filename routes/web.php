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
Auth::routes();

Route::get('/', 'IndexController@index')->name('index');
Route::get('/act', 'ActController@index')->name('act');
Route::get('/food', 'FoodController@index')->name('food');
Route::get('/family', 'FamilyController@index')->name('family');
Route::get('/homework', 'HomeWorkController@index')->name('homework');
Route::get('/online', 'OnlineController@index')->name('online');
Route::post('/online', 'OnlineController@store')->name('onlineStore');

//admin 管理后台
//Route::prefix('admin')->middleware('auth')->group(function () {
//    Route::get('/', 'Admin\IndexController@index');
//});
Route::prefix('admin')->group(function () {
    Route::post('/upload', 'Admin\UploadController@index');

    Route::get('/', 'Admin\SchoolController@index');
    Route::put('/{id}', 'Admin\SchoolController@update');

    Route::get('/teacher', 'Admin\TeacherController@index');
    Route::post('/teacher', 'Admin\TeacherController@store');
    Route::get('/teacherCreate', 'Admin\TeacherController@create');
    Route::get('/teacher/{id}', 'Admin\TeacherController@show');
    Route::delete('/teacher/{id}', 'Admin\TeacherController@destroy');
    Route::put('/teacher/{id}', 'Admin\TeacherController@update');

    Route::get('/cms', 'Admin\CmsController@index');
    Route::post('/cms', 'Admin\CmsController@store');
    Route::get('/cmsCreate', 'Admin\CmsController@create');
    Route::get('/cms/{id}', 'Admin\CmsController@show');
    Route::delete('/cms/{id}', 'Admin\CmsController@destroy');
    Route::put('/cms/{id}', 'Admin\CmsController@update');
});