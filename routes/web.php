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
    return view('addemployee');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addemployee', 'EmployeeController@store')->name('employee');

Route::post('edit', 'EmployeeController@update')->name('edit');

Route::get('delete/{id}', 'EmployeeController@destroy')->name('delete');


Route::get('/addemployee', 'EmployeeController@index')->name('employee');

Route::get('/viewemployee', 'EmployeeController@index')->name('viewemployee');

Route::get('/edit', 'EmployeeController@edit')->name('edit');



Route::resource('show','EmployeeController');
Route::resource('employees','EmployeeController');

