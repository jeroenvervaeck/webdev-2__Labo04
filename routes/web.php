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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('clients', 'ClientController@getIndex')->name('clients');
Route::get('clients/new', 'ClientController@getCreate')->name('clients.new');
Route::get('clients/{client}', 'ClientController@getEdit')->name('clients.edit');
Route::post('clients/save', 'ClientController@postSave')->name('clients.save');
Route::get('clients/delete/{id}', 'ClientController@postDelete')->name('clients.delete');

Route::any('rooms/{clientId}', 'RoomsController@checkAvailableRooms')->name('rooms.availibilty');

Route::get('reservations', 'ReservationsController@getIndex')->name('reservations');
Route::get('reservations/new/{client}', 'ReservationsController@getCreate')->name('reservations.new');
Route::get('reservations/edit/{reservation}', 'ReservationsController@getEdit')->name('reservations.edit');
Route::post('reservations/save', 'ReservationsController@postSave')->name('reservations.save');
Route::get('reservations/delete/{id}', 'ReservationsController@postDelete')->name('reservations.delete');


Auth::routes();
