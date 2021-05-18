<?php

use Illuminate\Support\Facades\Route;


Route::get('home', 'TestController@home')
    -> name('home');

Route::get('/comic/{index}', 'TestController@comic')
    -> name('comic');
