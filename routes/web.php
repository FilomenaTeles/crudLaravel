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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/', 'PlayerController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('players','PlayerController');

Route::prefix('players')->group(function () {

    Route::group(['middleware' => 'auth'], function () {
        // Auth Middleware
        Route::get('', 'PlayerController@index');

        // Admin Middleware
        Route::group(['middleware' => 'isAdmin'], function () {
            Route::get('create', 'PlayerController@create');
            Route::post('', 'PlayerController@store');
            Route::get('{player}/edit', 'PlayerController@edit');
            Route::put('{player}', 'PlayerController@update');
            Route::delete('{player}', 'PlayerController@destroy');
            Route::get('export','PlayerController@export');
            Route::get('importForm','PlayerController@importForm');
            Route::post('import', 'PlayerController@import');
        });
        Route::get('{player}', 'PlayerController@show');
    });

});
