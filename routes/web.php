<?php

use App\Http\Controllers\admin\AdminBeritaController;
use App\Http\Controllers\admin\AdminBidangUsahaController;
use App\Http\Controllers\admin\AdminKonsultanController;
use App\Http\Controllers\admin\AdminKuisController;
use App\Http\Controllers\admin\AdminPelatihanController;
use App\Http\Controllers\admin\AdminPembelajaranController;
use App\Http\Controllers\admin\AdminPeraturanPajakController;
use App\Http\Controllers\admin\AdminSoalController;
use App\Http\Controllers\admin\DasborAdminController;
use App\Http\Controllers\admin\kuis\DetailHasilKuisController;
use App\Http\Controllers\admin\kuis\ListHasilKuisController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangUsahaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\forum\DetailForumController;
use App\Http\Controllers\ForumPajakController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\kuis\DetailKuisController;
use App\Http\Controllers\kuis\EvaluasiController;
use App\Http\Controllers\kuis\HasilKuisController;
use App\Http\Controllers\kuis\JawabanController;
use App\Http\Controllers\kuis\soal\BenarSalahController;
use App\Http\Controllers\kuis\soal\EssaiController;
use App\Http\Controllers\kuis\soal\PilganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LihatPdfController;
use App\Http\Controllers\PelatihanSertifikasiController;
use App\Http\Controllers\pembelajaran\artikel\ArtikelController;
use App\Http\Controllers\pembelajaran\artikel\DetailArtikelController;
use App\Http\Controllers\pembelajaran\infografis\DetailInfografisController;
use App\Http\Controllers\pembelajaran\infografis\InfografisController;
use App\Http\Controllers\pembelajaran\video\DetailVideoController;
use App\Http\Controllers\pembelajaran\video\VideoController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\PeraturanPajakController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Auth::routes([
//     'verify' => true
// ]);

// user
Route::get('/', [DashboardController::class, 'show'])->name('dashboard');
Route::get('/layanan', [LayananController::class, 'tampilkan']);

Route::middleware(['auth', 'user'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/berita/{berita}/detail_berita', [BeritaController::class, 'show']);

    // bidang usaha
    Route::get('/bidang_usaha', [BidangUsahaController::class, 'index']);
    Route::get('/bidang_usaha/{bidang_usaha}/detail_bidang_usaha', [BidangUsahaController::class, 'show']);

    // konsultasi
    Route::get('/konsultasi', [KonsultasiController::class, 'index']);
    Route::get('/konsultasi/cari', [KonsultasiController::class, 'search']);
    Route::get('/konsultasi/kategori_konsultan', [KonsultasiController::class, 'showKategori']);
    Route::get('/konsultasi/{konsultan}/profil_konsultan', [KonsultasiController::class, 'showProfil']);

    // pelatihan sertifikasi
    Route::get('/pelatihan_sertifikasi', [PelatihanSertifikasiController::class, 'index']);
    Route::get('/pelatihan_sertifikasi/{pelatihan}/detail_pelatihan_sertifikasi', [PelatihanSertifikasiController::class, 'show']);

});

// admin
Route::get('/admin', [DasborAdminController::class, 'show'])->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->prefix('admin')->scopeBindings()->group(function () {

    Route::resource('berita', AdminBeritaController::class)->parameters([
        'berita' => 'berita'
    ]);
    Route::resource('bidang_usaha', AdminBidangUsahaController::class);
    Route::resource('konsultan', AdminKonsultanController::class);

    // kuis
    Route::resource('kuis', AdminKuisController::class)->parameters([
        'kuis' => 'kuis'
    ]);
    Route::resource('kuis.soal', AdminSoalController::class)->parameters([
        'kuis' => 'kuis'
    ]);

    // pelatihan
    Route::resource('pelatihan', AdminPelatihanController::class);
    Route::get('pelatihan/{pelatihan}/pdf', [AdminPelatihanController::class, 'showPdf']);
    Route::get('pelatihan/{pelatihan}/ppt', [AdminPelatihanController::class, 'showPpt']);

    Route::resource('pembelajaran', AdminPembelajaranController::class);
    Route::resource('peraturan_pajak', AdminPeraturanPajakController::class);
});


require __DIR__.'/auth.php';

Route::get('/admin/kuis/hasil_kuis', [ListHasilKuisController::class, 'tampilkan'])->middleware(['auth', 'admin']);
Route::get('/admin/kuis/hasil_kuis/detail', [DetailHasilKuisController::class, 'tampilkan'])->middleware(['auth', 'admin']);

Route::get('/peraturan_pajak_pusat', [PeraturanPajakController::class, 'tampilkanPusat']);
Route::get('/peraturan_pajak_daerah', [PeraturanPajakController::class, 'tampilkanDaerah']);
Route::get('/lihat_pdf', [LihatPdfController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kalkulator', [KalkulatorController::class, 'tampilkan']);


Route::get('/pembelajaran', [PembelajaranController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/artikel', [ArtikelController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/artikel/detail_artikel', [DetailArtikelController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/infografis', [InfografisController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/infografis/detail_infografis', [DetailInfografisController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/video', [VideoController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/pembelajaran/video/detail_video', [DetailVideoController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/forum_pajak', [ForumPajakController::class, 'tampilkan'])->middleware(['auth', 'user']);



Route::get('/forum_pajak/detail_forum_pajak', [DetailForumController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis', [KuisController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/detail_kuis', [DetailKuisController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/soal/benar_salah', [BenarSalahController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/soal/essai', [EssaiController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/soal/pilgan', [PilganController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/jawaban', [JawabanController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/hasil_kuis', [HasilKuisController::class, 'tampilkan'])->middleware(['auth', 'user']);
Route::get('/kuis/evaluasi', [EvaluasiController::class, 'tampilkan'])->middleware(['auth', 'user']);
