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

//Establishments
Route::get('/establishments', [App\Http\Controllers\Main\EstablishmentController::class, 'index']);
Route::get('/establishments/add', [App\Http\Controllers\Main\EstablishmentController::class, 'add']);