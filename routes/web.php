<?php

use App\Http\Controllers\admin\berita\EditBeritaController;
use App\Http\Controllers\admin\berita\ListBeritaController;
use App\Http\Controllers\admin\berita\TambahBeritaController;
use App\Http\Controllers\admin\bidang_usaha\EditBidangUsahaController;
use App\Http\Controllers\admin\bidang_usaha\ListBidangUsahaController;
use App\Http\Controllers\admin\bidang_usaha\TambahBidangUsahaController;
use App\Http\Controllers\admin\DasborAdminController;
use App\Http\Controllers\admin\Konsultan\EditKonsultanController;
use App\Http\Controllers\admin\Konsultan\ListKonsultanController;
use App\Http\Controllers\admin\Konsultan\TambahKonsultanController;
use App\Http\Controllers\admin\kuis\DetailHasilKuisController;
use App\Http\Controllers\admin\kuis\EditKuisController;
use App\Http\Controllers\admin\kuis\HasilKuisController;
use App\Http\Controllers\admin\kuis\ListKuisController;
use App\Http\Controllers\admin\kuis\soal\EditSoalController;
use App\Http\Controllers\admin\kuis\soal\ListSoalController;
use App\Http\Controllers\admin\kuis\soal\TambahSoalController;
use App\Http\Controllers\admin\kuis\TambahKuisController;
use App\Http\Controllers\admin\pajak\EditPajakController;
use App\Http\Controllers\admin\pajak\ListPajakController;
use App\Http\Controllers\admin\pajak\TambahPajakController;
use App\Http\Controllers\admin\pelatihan\EditPelatihanController;
use App\Http\Controllers\admin\pelatihan\ListPelatihanController;
use App\Http\Controllers\admin\pelatihan\TambahPelatihanController;
use App\Http\Controllers\admin\pembelajaran\EditPembelajaranController;
use App\Http\Controllers\admin\pembelajaran\ListPembelajaranController;
use App\Http\Controllers\admin\pembelajaran\TambahPembelajaranController;
use App\Http\Controllers\admin\PengaturanAkunController;
use App\Http\Controllers\auth\DaftarController;
use App\Http\Controllers\auth\IdentifikasiController;
use App\Http\Controllers\auth\MasukController;
use App\Http\Controllers\auth\PemulihanController;
use App\Http\Controllers\berita\DetailBeritaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\bidang_usaha\AgriBisnisController;
use App\Http\Controllers\bidang_usaha\EventController;
use App\Http\Controllers\bidang_usaha\FashionController;
use App\Http\Controllers\bidang_usaha\KosmetikController;
use App\Http\Controllers\bidang_usaha\KulinerController;
use App\Http\Controllers\bidang_usaha\OtomotifController;
use App\Http\Controllers\BidangUsahaController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\ForumPajakController;
use App\Http\Controllers\KalkulatorController;
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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DasborController::class, 'tampilkan']);
Route::get('/masuk', [MasukController::class, 'tampilkan']);
Route::get('/daftar', [DaftarController::class, 'tampilkan']);
Route::get('/identifikasi', [IdentifikasiController::class, 'tampilkan']);
Route::get('/pemulihan', [PemulihanController::class, 'tampilkan']);
Route::get('/admin', [DasborAdminController::class, 'tampilkan']);
Route::get('/admin/berita', [ListBeritaController::class, 'tampilkan']);
Route::get('/admin/berita/tambah_berita', [TambahBeritaController::class, 'tampilkan']);
Route::get('/admin/berita/edit_berita', [EditBeritaController::class, 'tampilkan']);
Route::get('/admin/bidang_usaha', [ListBidangUsahaController::class, 'tampilkan']);
Route::get('/admin/bidang_usaha/tambah_bidang_usaha', [TambahBidangUsahaController::class, 'tampilkan']);
Route::get('/admin/bidang_usaha/edit_bidang_usaha', [EditBidangUsahaController::class, 'tampilkan']);
Route::get('/admin/pajak', [ListPajakController::class, 'tampilkan']);
Route::get('/admin/pajak/tambah_pajak', [TambahPajakController::class, 'tampilkan']);
Route::get('/admin/pajak/edit_pajak', [EditPajakController::class, 'tampilkan']);
Route::get('/admin/pelatihan', [ListPelatihanController::class, 'tampilkan']);
Route::get('/admin/pelatihan/tambah_pelatihan', [TambahPelatihanController::class, 'tampilkan']);
Route::get('/admin/pelatihan/edit_pelatihan', [EditPelatihanController::class, 'tampilkan']);
Route::get('/admin/konsultan', [ListKonsultanController::class, 'tampilkan']);
Route::get('/admin/konsultan/tambah_konsultan', [TambahKonsultanController::class, 'tampilkan']);
Route::get('/admin/konsultan/edit_konsultan', [EditKonsultanController::class, 'tampilkan']);
Route::get('/admin/kuis', [ListKuisController::class, 'tampilkan']);
Route::get('/admin/kuis/tambah_kuis', [TambahKuisController::class, 'tampilkan']);
Route::get('/admin/kuis/edit_kuis', [EditKuisController::class, 'tampilkan']);
Route::get('/admin/kuis/hasil_kuis', [HasilKuisController::class, 'tampilkan']);
Route::get('/admin/kuis/hasil_kuis/detail', [DetailHasilKuisController::class, 'tampilkan']);
Route::get('/admin/kuis/soal', [ListSoalController::class, 'tampilkan']);
Route::get('/admin/kuis/soal/tambah_soal', [TambahSoalController::class, 'tampilkan']);
Route::get('/admin/kuis/soal/edit_soal', [EditSoalController::class, 'tampilkan']);
Route::get('/admin/pembelajaran', [ListPembelajaranController::class, 'tampilkan']);
Route::get('/admin/pembelajaran/tambah_pembelajaran', [TambahPembelajaranController::class, 'tampilkan']);
Route::get('/admin/pembelajaran/edit_pembelajaran', [EditPembelajaranController::class, 'tampilkan']);
Route::get('/admin/pengaturan_akun', [PengaturanAkunController::class, 'tampilkan']);
Route::get('/layanan', [LayananController::class, 'tampilkan']);
Route::get('/peraturan_pajak_pusat', [PeraturanPajakController::class, 'tampilkanPusat']);
Route::get('/peraturan_pajak_daerah', [PeraturanPajakController::class, 'tampilkanDaerah']);
Route::get('/lihat_pdf', [LihatPdfController::class, 'tampilkan']);
Route::get('/kalkulator', [KalkulatorController::class, 'tampilkan']);
Route::get('/bidang_usaha', [BidangUsahaController::class, 'tampilkan']);
Route::get('/bidang_usaha/agribisnis', [AgriBisnisController::class, 'tampilkan']);
Route::get('/bidang_usaha/event', [EventController::class, 'tampilkan']);
Route::get('/bidang_usaha/fashion', [FashionController::class, 'tampilkan']);
Route::get('/bidang_usaha/kosmetik', [KosmetikController::class, 'tampilkan']);
Route::get('/bidang_usaha/kuliner', [KulinerController::class, 'tampilkan']);
Route::get('/bidang_usaha/otomotif', [OtomotifController::class, 'tampilkan']);
Route::get('/pembelajaran', [PembelajaranController::class, 'tampilkan']);
Route::get('/pembelajaran/artikel', [ArtikelController::class, 'tampilkan']);
Route::get('/pembelajaran/artikel/detail_artikel', [DetailArtikelController::class, 'tampilkan']);
Route::get('/pembelajaran/infografis', [InfografisController::class, 'tampilkan']);
Route::get('/pembelajaran/infografis/detail_infografis', [DetailInfografisController::class, 'tampilkan']);
Route::get('/pembelajaran/video', [VideoController::class, 'tampilkan']);
Route::get('/pembelajaran/video/detail_video', [DetailVideoController::class, 'tampilkan']);
Route::get('/forum_pajak', [ForumPajakController::class, 'tampilkan']);
Route::get('/berita', [BeritaController::class, 'tampilkan']);
Route::get('/pelatihan_sertifikasi', [PelatihanSertifikasiController::class, 'tampilkan']);
Route::get('/berita/detail_berita', [DetailBeritaController::class, 'tampilkan']);