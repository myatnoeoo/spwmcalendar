<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('schedules', 'ScheduleController');

Route::get('schedules/more-options/create', 'ScheduleController@moreOptionCreate')->name('schedule.more.create');


// @ Event Edit
Route::get('/eventedit', 'EventeditController@edit')->name('event_edit');

Route::get('/eventedit/get-all-user', 'EventeditController@getAllUser')->name('eventEdit.getAllUser');

Route::get('calendar', 'ScheduleController@index')->name('schedule.index');

Route::resource('blogs', 'BlogController');

Route::resource('products', 'ProductController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
