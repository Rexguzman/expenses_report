<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

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
    return view('auth.login');
});

Auth::routes(['verify' => true]);


Route::get('clients', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes();

Route::resource('/clients','ClientController');
Route::resource('/clients/{id}/expenses','ExpenseController');

Route::get('/clients/{id}/expenses/create', 'ExpenseController@create');
Route::get('/clients/{id}', 'ExpenseController@create');
Route::post('/clients/{id}/expenses', 'ExpenseController@store');

