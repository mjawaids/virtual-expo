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

use Illuminate\Support\Facades\Storage;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {                                       // Map view of upcoming events
    return view('events');
});

Route::get('/current', function () {                                // Map view of current events
    return view('events');
});

Route::get('/expired', function () {                                // Map view of past events
    return view('events');
});

Route::get('/download', function () {                               // To download marketing document
    $file = storage_path('app/' . request('file') );
    return response()->download( $file );
});

Route::get('/event/{event}', function (\App\Event $event) {         // Event detail view with all the stands
    return view('stands', compact('event'));
});

Route::get('stand/{stand}', 'StandController@show');                // Visiting Stand

Route::get('reservation/{stand}', 'ReservationController@create');  // Reservation form
Route::post('reservation', 'ReservationController@store');          // Reservation submit

// API's
Route::get('events', 'EventController@index');                      // Returns list of all the upcoming events
Route::get('events/current', 'EventController@current');            // Returns list of all the current events
Route::get('events/expired', 'EventController@expired');            // Returns list of all the past events
Route::get('events/{event}', 'StandController@index');              // Returns details of the events
