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
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/survey', function () {
    return view('survey');
});
// Route::get('/past', function () {
//     return view('past');
// });

Route::get('/past', 'SurveyController@history');

Route::post('/submit', 'SurveyController@send');

Route::get('/profile/{user}', 'UsersController@index');
