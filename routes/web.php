<?php

Route::get('/grid', function () {
    return view('tugas_grid');
});

Route::get('/grid/Mlaravel', function () {
    return view('tugas_grid_Mlaravel');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});