<?php


Route::get('/', 'AuthController@index')->middleware('checkUserLogin');

Route::group(['middleware' => ['checkUserNotLogin']], function(){
    Route::get('/login', 'AuthController@login')->name('auth.showLogin');
    Route::get('/register', 'AuthController@register')->name('auth.showRegister');

    Route::post('/register', 'AuthController@postRegister')->name('auth.postRegister');
    Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin');
});

Route::get('/logout', 'AuthController@logout')->name('auth.logout');
