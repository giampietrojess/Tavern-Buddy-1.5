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

// Login and Registration (authentication) Routes
Auth::routes();

// Home Route
Route::get('/dashboard', 'DashboardController@index');

// Character Routes
Route::resource('characters', 'CharactersController');

Route::get('/mycharacters', 'CharactersController@mycharacters');