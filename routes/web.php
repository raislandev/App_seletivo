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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->group(function () {
    Route::post('/students/store', 'StudentController@store')->name('students.store');
    Route::get('/students/create', 'StudentController@create')->name('students.create');


});

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {
    Route::get('/students', 'StudentController@index')->name('students.index');
    Route::get('/students/show/{id}', 'StudentController@show')->name('students.show');
    Route::put('/students/update/{id}', 'StudentController@update')->name('students.update');
    Route::get('/students/edit/{id}', 'StudentController@edit')->name('students.edit');
    Route::delete('/students/destroy/{id}', 'StudentController@destroy')->name('students.destroy');


    //Route::resource('/students', 'StudentController');
});