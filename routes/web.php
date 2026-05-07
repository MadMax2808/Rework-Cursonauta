<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('guest.principal');
});
Route::get('/login', function () {
    return view('guest.login');
});
Route::get('/register', function () {
    return view('guest.register');
});
Route::get('/allcurses', function () {
    return view('guest.allcurses');
});
Route::get('/details-course', function () {
    return view('guest.details-course');
});
