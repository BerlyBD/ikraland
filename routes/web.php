<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // halaman homepage
});

Route::get('/tentang/fasilitas', function () {
    return view('fasilitas'); // halaman fasilitas
});

Route::get('/pertanian', function () {
    return view('pertanian');
});

Route::get('/perikanan', function () {
    return view('perikanan');
});
Route::get('/programedukasi', function () {
    return view('programedukasi');
});

Route::get('/programrekreasi', function () {
    return view('programrekreasi');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/programkesehatan', function () {
    return view('programkesehatan');
});

