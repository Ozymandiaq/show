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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::post('/', 'SiteController@send')->name('send');



// Route::get('/content_for_services', function () {
//     return view('content_for_services');
// })->name('content_for_services');

// Route::get('/events', function () {
//     return view('events');
// })->name('events');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


Route::resource('content_for_services','ContentInServiceController');
Route::resource('events','EventController');

// Route::post('/content_for_services', 'ContentInServiceController@store');
// Route::get('/content_for_services', 'ContentInServiceController@show')->name('content_for_services');
// Route::delete('/content_for_services/{contentInService}', 'EventController@destroy')->name('contentInServices.delete');

// Route::post('/events', 'EventController@store');
// Route::get('/events', 'EventController@show') ->name('events');
// Route::delete('/events/{event}', 'EventController@destroy') ->name('events.delete');

