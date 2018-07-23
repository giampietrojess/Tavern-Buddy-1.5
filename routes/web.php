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
Route::resource('characters', 'Character\CharactersController');

Route::get('/mycharacters', 'Character\CharactersController@mycharacters');



//Character Form Builder Routes

    // Shows Name Quest, then saves the results
    Route::get('/nameQuest', 'Character\NameController@nameQuest');
    Route::post('/nameQuest', 'Character\NameController@postnameQuest');

    Route::get('/raceQuest', 'Character\RaceController@index');
    Route::post('/raceQuest', 'Character\RaceController@postraceQuest');

    Route::get('/classQuest', 'Character\ClassController@classQuest');
    Route::post('/classQuest', 'Character\ClassController@postclassQuest');

    Route::get('/abilityQuest', 'Character\AbilityController@abilityQuest');
    Route::post('/abilityQuest', 'Character\AbilityController@postabilityQuest');

    Route::get('/backgroundQuest', 'Character\BackgroundController@backgroundQuest');
    Route::post('/backgroundQuest', 'Character\BackgroundController@postbackgroundQuest');

    Route::get('/alignQuest', 'Character\AlignmentController@alignQuest');
    Route::post('/alignQuest', 'Character\AlignmentController@postalignQuest');

    //  Shows the user their choices, gives opportunity to return to 
    //  earlier answers and change them. 
    //  If satisfied, stores information to the DB

    Route::get('/reviewQuest', 'Character\CharactersController@reviewQuest');
    Route::post('/characters/store', 'Character\CharactersController@store');