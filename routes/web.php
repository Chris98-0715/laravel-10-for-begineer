<?php

use Illuminate\Support\Facades\Route;


//for exactly location of view
Route::get('/', function () {
    return view('welcome');
});

//for simply location of view
//Route::view('/', 'welcome');