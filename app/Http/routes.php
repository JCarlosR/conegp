<?php

Route::get('/', function () {
    return view('subscription');
});

Route::auth();

Route::get('/home', 'HomeController@index');
