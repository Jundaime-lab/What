<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project; // Jangan lupa tambahkan ini di paling atas!

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
    $projects = Project::all(); // Mengambil SEMUA data dari tabel projects
    return view('portfolio', compact('projects')); // Mengirim variabel $projects ke view
});