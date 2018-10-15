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
    return view('welcome');
});

Auth::routes(['verify' => true]);

/**
 * User routes
 */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

/**
 * Admin routes
 */
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/settings', 'SettingsController@index')->name('admin.settings');
    Route::post('/settings', 'SettingsController@update')->name('admin.settings.update');
});