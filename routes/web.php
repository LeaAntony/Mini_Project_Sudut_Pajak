<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\PemulihanController;
use App\Http\Controllers\PemulihanSandiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DasborController::class, 'tampilkan']);
Route::get('/masuk', [MasukController::class, 'tampilkan']);
Route::get('/daftar', [DaftarController::class, 'tampilkan']);
Route::get('/identifikasi', [IdentifikasiController::class, 'tampilkan']);
Route::get('/pemulihan', [PemulihanController::class, 'tampilkan']);
Route::get('/pemulihan_sandi', [PemulihanSandiController::class, 'tampilkan']);
Route::get('/layanan', [LayananController::class, 'tampilkan']);