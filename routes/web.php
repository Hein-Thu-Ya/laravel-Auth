<?php


Route::get('/', 'AuthController@index')->middleware('checkUserLogin');

Route::get('/login', 'AuthController@login')->name('auth.showLogin')->middleware('checkUserNotLogin');
Route::get('/register', 'AuthController@register')->name('auth.showRegister')->middleware('checkUserNotLogin');

Route::post('/register', 'AuthController@postRegister')->name('auth.postRegister')->middleware('checkUserNotLogin');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('checkUserNotLogin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
