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

// Other Home Route (in case a user types /home instead of clicking buttons)
Route::get('/home', 'DashboardController@index');

// Character Routes
Route::resource('characters', 'CharactersController');

Route::get('/mycharacters', 'CharactersController@mycharacters');


//Character Form Builder Routes

    // Shows Name Quest, then saves the results
    Route::get('/nameQuest', 'CharacterNameController@nameQuest');
    Route::post('/nameQuest', 'CharacterNameController@postnameQuest');

    Route::get('/raceQuest', 'CharactersController@raceQuest');
    Route::post('/raceQuest', 'CharactersController@postraceQuest');

    Route::get('/classQuest', 'CharactersController@classQuest');
    Route::post('/classQuest', 'CharactersController@postclassQuest');

    Route::get('/abilityQuest', 'CharactersController@abilityQuest');
    Route::post('/abilityQuest', 'CharactersController@postabilityQuest');

    Route::get('/backgroundQuest', 'CharactersController@backgroundQuest');
    Route::post('/backgroundQuest', 'CharactersController@postbackgroundQuest');

    Route::get('/alignQuest', 'CharactersController@alignQuest');
    Route::post('/alignQuest', 'CharactersController@postalignQuest');

    //  Shows the user their choices, gives opportunity to return to 
    //  earlier answers and change them. 
    //  If satisfied, stores information to the DB

    Route::get('/reviewQuest', 'CharactersController@reviewQuest');
    Route::post('/characters/store', 'CharactersController@store');