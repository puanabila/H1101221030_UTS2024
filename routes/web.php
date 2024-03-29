<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/jabatan', function () {
    return view('jabatan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});