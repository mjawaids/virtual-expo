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

Route::get('/', function () {
    return view('events');
});

Route::get('/current', function () {
    return view('events');
});

Route::get('/expired', function () {
    return view('events');
});

Route::get('/download', function () {
    $file = storage_path('app/' . request('file') );
    return response()->download( $file );
});

Route::get('/event/{event}', function (\App\Event $event) {
    return view('stands', compact('event'));
});

Route::get('stand/{stand}', 'StandController@show');    // Visiting Stand

Route::get('reservation/{stand}', 'ReservationController@create');
Route::post('reservation', 'ReservationController@store');

// API's
Route::get('events', 'EventController@index');
Route::get('events/current', 'EventController@current');
Route::get('events/expired', 'EventController@expired');
Route::get('events/{event}', 'StandController@index');
