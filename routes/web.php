<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');  // Cela renverra la vue 'home.blade.php' dans resources/views
});