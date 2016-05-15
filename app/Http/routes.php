<?php

Route::get('/', 'SubscriptionController@index');
Route::post('/', 'SubscriptionController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
