<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DasborController::class, 'tampilkan']);
Route::get('/masuk', [MasukController::class, 'tampilkan']);
Route::get('/daftar', [DaftarController::class, 'tampilkan']);