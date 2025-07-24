<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    echo'Blade Layout ';
});

Route::get('/show',[MainController::class,'showPage']);
