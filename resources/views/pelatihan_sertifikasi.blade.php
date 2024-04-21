@extends('layouts.secondary')

@section('title', 'Pelatihan atau Sertifikasi')
@section('judulBreadcrumbs', 'Pelatihan Atau Sertifikasi')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Pelatihan Atau Sertifikasi</li>

@endsection

@section('content')

<!-- Konten Dimulai -->
<div class="relative">
    <img src="/images/background/about-bg.jpg" class="w-full" alt="about background">
    <div class="absolute top-0 right-0 w-full h-full">
        <div class="container mx-auto px-4 mt-20 mr-44 mb-12">
            <div class="grid grid-cols-2 gap-20">
                <div>
                    <p class="font-medium text-4xl text-sky-800 mt-12">Pajak Penghasilan (PPh)
                        <p class="font-medium text-4xl text-sky-800 mt-2">Pasal 22</p>
                        <p class="text-base text-gray-600 mt-5">PPh 22 merupakan penganaan pajak terhadap badan
                            usaha yang melakukan kegiatan perdangan impor, ekspor, atau re-impor. Seperti tercantum pada
                            Undang-Undang atau UU No.36 Tahun 2008 tentang pajak penghasilan. PPh Pasal 22 juga
                            merupakan salah satu bentuk pemotongan dan pemungutan Pajak Penghasilan yang dilakukan oleh
                            pihak lain terhadap Wajib Pajak</p>
                        <a href="/pelatihan_sertifikasi/detail_pelatihan_sertifikasi"
                            class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-11 text-white mt-10 text-base">MULAI
                            SEKARANG
                        </a>
                </div>
                <div>
                    <img src="/images/pelatihan/1691558783.jpg" alt="" style="width: 680px; position: absolute; right: 50px;">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 mt-20">
                <div>
                    <p class="font-medium text-4xl text-sky-800">Pajak Penghasilan Pasal
                        <p class="font-medium text-4xl text-sky-800 mt-2">21/26-</p>
                        <p class="text-base text-gray-600 mt-5">PPh Pasal 21 adalah pajak atas penghasilan berupa gaji,
                            upah, honorarium, tunjangan, dan pembayaran lain dengan nama dan dalam bentuk apapun sehubungan
                            dengan pekerjaan atau jabatan, jasa, dan kegiatan yang dilakukan oleh orang pribadi Subjek
                            Pajak dalam negeri. PPh Pasal 26 merupakan pajak yang dikenakan atas penghasilan yang diterima
                            wajib pajak luar negeri dari Indonesia.</p>
                        <a href="/pelatihan_sertifikasi/detail_pelatihan_sertifikasi"
                            class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-11 text-white mt-10 text-base">MULAI
                            SEKARANG
                        </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 mt-16">
                <div>
                    <p class="font-medium text-4xl text-sky-800">Materi PPh Pasal 24
                        <p class="text-base text-gray-600 mt-5">Pajak Penghasilan Pasal 24 adalah peraturan yang
                            mengatur hak wajib pajak untuk memanfaatkan kredit pajak mereka di luar negeri, untuk
                            mengurangi nilai pajak terutang yang dimiliki di Indonesia.</p>
                        <a href="/pelatihan_sertifikasi/detail_pelatihan_sertifikasi"
                            class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-11 text-white mt-10 text-base">MULAI
                            SEKARANG
                        </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 mt-8">
                <div>
                    <p class="font-medium text-4xl text-sky-800 mt-8">PAJAK PENGHASILAN 23/26</p>
                    <p class="text-base text-gray-600 mt-5">PPh pasal 23 adalah pajak yang dikenakan pada
                        penghasilan atas modal, penyerahan jasa, atau hadiah dan penghargaan, selain yang telah dipotong
                        PPh pasal 21. PPh pasal 26 adalah pajak yang dikenakan atas penghasilan yang diterima wajib pajak
                        luar negeri dari Indonesia selain Bentuk Usaha Tetap (BUT) dari Badan Pemerintan, Subjek pajak Dalam
                        Negeri, Penyelenggara kegiatan, BUT, Perwakilan Perusahaan Luar Negeri.</p>
                    <a href="/pelatihan_sertifikasi/detail_pelatihan_sertifikasi"
                        class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-11 text-white mt-10 text-base">MULAI
                        SEKARANG
                    </a>
                </div>
                <div>
                    <img src="/images/pelatihan/1691542426.jpg" alt="" style="width: 680px; position: absolute; right: 50px;">
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end mr-20">
            <button
                class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2 hover:bg-gray-100 hover:text-inherit">
                Previous
            </button>
            <a href="#">
                <button
                    class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2 hover:bg-gray-100 hover:text-inherit">
                    1
                </button>
            </a>
            <button
                class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 hover:bg-gray-100 hover:text-inherit">
                Next
            </button>
        </div>
    </div>
</div>
<!-- Konten Berakhir -->

@endsection