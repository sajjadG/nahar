<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'login')->name('login');
Route::post('/', 'AccountsController@loginSubmit');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){
    Route::get('/', 'PagesController@dashboard');
    Route::get('/reserve', 'ReservationsController@foodList');
    Route::post('/reserve', 'ReservationsController@foodListSubmit');
    Route::get('/history', 'ReservationsController@history');
});