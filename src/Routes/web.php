<?php

Route::get('/', function () {
    return view(config('gentella.views.pages.home.welcome'));
});

Route::get('/home', 'HomeController@index')->name('gentella.home');
