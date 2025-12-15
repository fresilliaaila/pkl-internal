<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('tentang', function () {
    return view('tentang');
});
Route::get('/fressillia/{nama}', function ($nama) {
    return "Halo, $nama!, Selamat datang di toko online ";
});
Route::get('/yaya/{nama?}', function ($nama = 'semua') {
    return "Menampilkan kategori: $nama ";
});

