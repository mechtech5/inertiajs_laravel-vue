<?php

Auth::routes(['register' => false]);

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'DashboardController@index');