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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/facility', 'NavigationController@toFacility')->name('facility');
Route::get('/office', 'NavigationController@toOffice')->name('office');
Route::get('/conference', 'NavigationController@toConference')->name('conference');
Route::get('/myconference{req_id}', 'NavigationController@toMyConference')->name('myconference');
Route::get('/myoffice{office_no}', 'NavigationController@toMyOffice')->name('myoffice');
Route::get('/events', 'NavigationController@toEvents')->name('events');
Route::get('/blog', 'NavigationController@toBlog')->name('blog');
Route::get('/parking', 'NavigationController@toParking')->name('parking');


Route::get('auth/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/redirect', 'FacebookAuthController@redirect');


Route::get('/callback', 'FacebookAuthController@callback');


Route::post('facilityForm', 'FacilityController@save_data');
Route::post('officeForm', 'OfficeController@save_data');
Route::post('conferenceForm', 'ConferenceController@save_data');
Route::post('eventsForm', 'EventController@save_data');
Route::post('parkingForm', 'ParkingController@save_data');
