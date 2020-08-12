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

Route::resources([
    'clients' => 'ClientController',
    'expenses' => 'ExpenseController',
]);

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index');

    Route::prefix('{client_id}')->group(function() {
        Route::get('/expenses/create', 'ExpenseController@create');
        Route::get('/expenses/{expense_id}/edit', 'ExpenseController@edit');
        Route::put('/expenses/{expense_id}', 'ExpenseController@update');
        Route::post('/expenses', 'ExpenseController@store');

    });
});

