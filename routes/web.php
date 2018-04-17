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
    return redirect('calendar');
});
Route::get('calendar', 'CalendarController@index')->name('home');
Route::get('calendar/{id}/showdata', 'CalendarController@showdata')->name('showdata');
Route::get('calendar/{id}/create', 'CalendarController@create')->name('create');
Route::post('calendar/{id}/create', 'CalendarController@store')->name('store');
Route::get('calendar/edit/{id}', 'CalendarController@edit')->name('edit');
Route::post('calendar/update/{id}', 'CalendarController@update')->name('update');
Route::delete('calendar/delete/{id}', 'CalendarController@delete')->name('delete');
Route::get('calendar/api', 'CalendarController@api')->name('api');