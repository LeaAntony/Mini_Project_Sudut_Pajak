<?php

use App\Http\Controllers\AgribisnisController;
use App\Http\Controllers\BidangUsahaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\KosmetikController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LihatPdfController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\OtomotifController;
use App\Http\Controllers\PemulihanController;
use App\Http\Controllers\PeraturanPajakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DasborController::class, 'tampilkan']);
Route::get('/masuk', [MasukController::class, 'tampilkan']);
Route::get('/daftar', [DaftarController::class, 'tampilkan']);
Route::get('/identifikasi', [IdentifikasiController::class, 'tampilkan']);
Route::get('/pemulihan', [PemulihanController::class, 'tampilkan']);
Route::get('/layanan', [LayananController::class, 'tampilkan']);
Route::get('/peraturan_pajak_pusat', [PeraturanPajakController::class, 'tampilkanPusat']);
Route::get('/peraturan_pajak_daerah', [PeraturanPajakController::class, 'tampilkanDaerah']);
Route::get('/lihat_pdf', [LihatPdfController::class, 'tampilkan']);
Route::get('/kalkulator', [KalkulatorController::class, 'tampilkan']);
Route::get('/bidang_usaha', [BidangUsahaController::class, 'tampilkan']);
Route::get('/bidang_usaha/agribisnis', [AgribisnisController::class, 'tampilkan']);
Route::get('/bidang_usaha/event', [EventController::class, 'tampilkan']);
Route::get('/bidang_usaha/fashion', [FashionController::class, 'tampilkan']);
Route::get('/bidang_usaha/kosmetik', [KosmetikController::class, 'tampilkan']);
Route::get('/bidang_usaha/kuliner', [KulinerController::class, 'tampilkan']);
Route::get('/bidang_usaha/otomotif', [OtomotifController::class, 'tampilkan']);