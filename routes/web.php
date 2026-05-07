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
Route::get('/completion', function () {
    return view('student.completion');
});
Route::get('/kardex', function () {
    return view('student.kardex');
});
Route::get('/perfil', function () {
    return view('guest.perfil');
});

