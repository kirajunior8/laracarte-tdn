<?php



Route::get('/', 'PagesController@home')->name('home_path');

Route::get('/about', 'PagesController@about')->name('about_path');
