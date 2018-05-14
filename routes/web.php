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

Route::get('/social', 'NavigationController@toSocial')->name('social');
Route::get('/rewards', 'NavigationController@toRewards')->name('rewards');
Route::get('/directory', 'NavigationController@toDirectory')->name('directory');


Route::get('auth/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');

Route::get('login/twitter', 'TwitterAuthController@redirect');
Route::get('login/twitter/callback', 'TwitterAuthController@callback');


Route::post('facilityForm', 'FacilityController@save_data');
Route::post('officeForm', 'OfficeController@save_data');
Route::post('conferenceForm', 'ConferenceController@save_data');
Route::post('eventsForm', 'EventController@save_data');
Route::post('parkingForm', 'ParkingController@save_data');

Route::post('admin-eventsForm', 'AdmineventController@save_data');
Route::post('blogForm', 'BlogController@save_data');



Route::get('/admin', 'AdminNavigationController@toAdmin');

Route::get('/admin-dashboard', 'AdminNavigationController@toAdminDashbord')->name('admin-dashboard');


Route::get('/add-blog', 'AdminNavigationController@toAddBlog')->name('add-blog');
Route::get('/admin-blog', 'AdminNavigationController@toAdminBlog')->name('admin-blog');
Route::get('/add-directories', 'AdminNavigationController@toAddDirectories')->name('add-directories');
Route::get('/add-new-parking', 'AdminNavigationController@toAddNewParking')->name('add-new-parking');
Route::get('/add-rewards', 'AdminNavigationController@toAddRewards')->name('add-rewards');
Route::get('/admin-events', 'AdminNavigationController@toAdminEvents')->name('admin-events');


