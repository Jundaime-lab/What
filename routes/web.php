<?php

use Illuminate\Support\Facades\Route;

// Halaman utama langsung menampilkan Portfolio
Route::get('/', function () {
    return view('welcome');
});

// Tugas Grid Ungu 1
Route::get('/grid', function () {
    return view('tugas_grid');
});

// Tugas Grid Ungu 2
Route::get('/grid/mlaravel', function () {
    return view('tugas_grid_Mlaravel');
});

// Portofolio (bisa diakses via / atau /portfolio)
Route::get('/portfolio', function () {
    return view('portfolio');
});