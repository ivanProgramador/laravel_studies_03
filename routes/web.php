<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo'Blade Layout ';
});

Route::view('/home', 'home');
