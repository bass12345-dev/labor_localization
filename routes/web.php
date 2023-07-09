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
//Establishments POST
Route::post('/store-establishment', 'App\Http\Controllers\Main\EstablishmentController@store');
Route::post('/get-establishment', 'App\Http\Controllers\Main\EstablishmentController@get');
Route::post('/delete-establishment', 'App\Http\Controllers\Main\EstablishmentController@delete');

//Users View
Route::get('/users', [App\Http\Controllers\Main\UsersController::class, 'index']);
Route::get('/users/add', [App\Http\Controllers\Main\UsersController::class, 'add']);

//User POST
Route::post('/store-user', 'App\Http\Controllers\Main\UsersController@store');
Route::post('/get-users', 'App\Http\Controllers\Main\UsersController@get');
Route::post('/delete-user', 'App\Http\Controllers\Main\UsersController@delete');