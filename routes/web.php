<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project; // Pastikan baris ini ada di paling atas file

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
    // Mengambil semua data dan mengurutkan dari yang terbaru (descending)
    $projects = Project::orderBy('created_at', 'desc')->get();
    
    return view('portfolio', compact('projects'));
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});