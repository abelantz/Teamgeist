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
    return view('dashboard');
})->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('teams', 'HomeController@teams')->name('teams');
Route::get('teams/{team}', 'HomeController@team')->name('team');
Route::get('invoices', 'HomeController@invoices')->name('invoices');
Route::get('sponsors', 'HomeController@sponsors')->name('sponsors');
Route::get('contracts', 'HomeController@contracts')->name('contracts');
