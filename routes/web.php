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

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});



// Login and Registration (authentication) Routes
Auth::routes();

// Home Route
Route::get('/dashboard', 'DashboardController@index');

// Other Home Route (in case a user types /home instead of clicking buttons)
Route::get('/home', 'DashboardController@index');

// Character Routes
Route::resource('characters', 'Character\CharactersController');

Route::get('/mycharacters', 'Character\CharactersController@mycharacters');

Route::post('/characters/store', 'Character\CharactersController@store');