<?php

use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index']);
