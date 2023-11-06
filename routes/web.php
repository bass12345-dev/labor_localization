<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);


Route::get('/dashboard', [App\Http\Controllers\Main\DashboardController::class, 'index']);

//Authentication
Route::post('/verify-user', 'App\Http\Controllers\Auth\LoginController@verify');

//Establishments View
Route::get('/establishments', [App\Http\Controllers\Main\EstablishmentController::class, 'index']);
Route::get('/establishments/add', [App\Http\Controllers\Main\EstablishmentController::class, 'add']);

Route::get('/establishments/survey', [App\Http\Controllers\Main\EstablishmentController::class, 'survey']);



//Establishments POST
Route::post('/store-establishment', 'App\Http\Controllers\Main\EstablishmentController@store');
Route::post('/get-establishment', 'App\Http\Controllers\Main\EstablishmentController@get');
Route::post('/delete-establishment', 'App\Http\Controllers\Main\EstablishmentController@delete');


//Establishment Survey POST
Route::post('/store-survey', 'App\Http\Controllers\Main\EstablishmentController@store_survey');
Route::post('/get-survey-data', 'App\Http\Controllers\Main\EstablishmentController@get_survey_data');

//Users View
Route::get('/users', [App\Http\Controllers\Main\UsersController::class, 'index']);
Route::get('/users/add', [App\Http\Controllers\Main\UsersController::class, 'add']);

//User POST
Route::post('/store-user', 'App\Http\Controllers\Main\UsersController@store');
Route::post('/get-users', 'App\Http\Controllers\Main\UsersController@get');
Route::post('/delete-user', 'App\Http\Controllers\Main\UsersController@delete');


//Contractor View
Route::get('/contractors', [App\Http\Controllers\Main\ContractorsController::class, 'index']);
Route::get('/contractors/add', [App\Http\Controllers\Main\ContractorsController::class, 'add']);


//Contractor POST
Route::post('/store-contractor', 'App\Http\Controllers\Main\ContractorsController@store');
Route::post('/get-contractors', 'App\Http\Controllers\Main\ContractorsController@get');



// Back Up Database
Route::get('/back-up-database', [App\Http\Controllers\Main\BackupDBController::class, 'index']);



///Destroy Session
Route::get('/out', 'App\Http\Controllers\Auth\Logout@out');