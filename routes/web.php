<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\LoginController;
Use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'show']);
Route::get('/', [DashboardController::class, 'show']);