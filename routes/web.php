<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'Dashboard@index')->name('home.index');

    Route::get('/', 'Landing@index')->name('landing');
    Route::get('/landing-detail/{uuid}', 'Landing@detail')->name('landing-detail');

    Route::group(['prefix' => 'login', 'middleware' => ['guest'], 'as' => 'login.'], function () {
        Route::get('/login-akun', 'Auth@show')->name('login-akun');
        Route::post('/login-proses', 'Auth@login_proses')->name('login-proses');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
        Route::get('/dashboard-admin', 'Dashboard@dashboard_admin')->name('dashboard-admin');

        Route::get('/data-event', 'EventController@index')->name('data-event');
        Route::get('/get-data-event', 'EventController@get')->name('get-data-event');
        Route::get('/show-data-event/{params}', 'EventController@show')->name('show-data-event');
        Route::post('/add-data-event', 'EventController@store')->name('add-data-event');
        Route::post('/update-data-event/{params}', 'EventController@update')->name('update-data-event');
        Route::delete('/delete-data-event/{params}', 'EventController@delete')->name('delete-data-event');
    });

    Route::get('/logout', 'Auth@logout')->name('logout');
});
