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

    Route::get('/act', 'Admin\ActController@index');
    Route::post('/act', 'Admin\ActController@store');
    Route::get('/actCreate', 'Admin\ActController@create');
    Route::get('/act/{id}', 'Admin\ActController@show');
    Route::delete('/act/{id}', 'Admin\ActController@destroy');
    Route::put('/act/{id}', 'Admin\ActController@update');

    Route::get('/food', 'Admin\FoodController@index');
    Route::post('/food', 'Admin\FoodController@store');
    Route::get('/foodCreate', 'Admin\FoodController@create');
    Route::get('/food/{id}', 'Admin\FoodController@show');
    Route::delete('/food/{id}', 'Admin\FoodController@destroy');
    Route::put('/food/{id}', 'Admin\FoodController@update');

    Route::get('/homework', 'Admin\HomeworkController@index');
    Route::post('/homework', 'Admin\HomeworkController@store');
    Route::get('/homeworkCreate', 'Admin\HomeworkController@create');
    Route::get('/homework/{id}', 'Admin\HomeworkController@show');
    Route::delete('/homework/{id}', 'Admin\HomeworkController@destroy');
    Route::put('/homework/{id}', 'Admin\HomeworkController@update');

    Route::get('/online', 'Admin\OnlineController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
