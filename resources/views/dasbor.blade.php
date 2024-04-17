@extends('layouts.main')

@section('title', 'Home | Sudut Pajak')

@section('content')

<link rel="stylesheet" type="text/css" href="/slick/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="/slick/slick/slick-theme.css" />
<link rel="stylesheet" href="/css/dasbor.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/slick/slick/slick.min.js"></script>
<script src="/js/dasbor.js"></script>

{{-- carousel --}}
<div class="carousel w-full">
    <div id="slide1" class="carousel-item relative w-full">
        <img src="/images/carousel1.png" class="w-full" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle opacity-75">❮</a>
            <a href="#slide2" class="btn btn-circle opacity-75">❯</a>
        </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
        <img src="/images/carousel2.jpeg" class="w-full" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle opacity-75">❮</a>
            <a href="#slide3" class="btn btn-circle opacity-75">❯</a>
        </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
        <img src="/images/carousel3.png" class="w-full" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle opacity-75">❮</a>
            <a href="#slide1" class="btn btn-circle opacity-75">❯</a>
        </div>
    </div>
</div>

{{-- tentang sudut pajak --}}
<div class="container my-24 mx-auto">
    <div class="grid grid-cols-2 gap-20 mx-20">
        <div class="my-auto">
            <h2 class="text-5xl font-bold">Sudut Pajak</h2>
            <p class="leading-relaxed text-justify text-lg my-10">
                Kami "sudut pajak" merupakan layanan pajak berbasis website. Saat ini sudut pajak memberikan
                layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk
                memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum
                terdaftar. Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami
                peraturan perpajakan
            </p>
        </div>
        <div class="moving-image">
            <img src="/images/Pajak.png" class="w-fit">
        </div>
    </div>
</div>

{{-- counter --}}
<div class="bg-gradient-to-b from-emerald-500 to-sky-500 my-24">
    <div class="grid grid-cols-4 justify-items-center mx-40 py-20">
        <div class="relative w-fit">
            <img src="/images/count-shape.png" class="w-full">
            <div class="absolute transform -translate-y-1/2 left-5 right-5 top-1/2 pb-5">
                <span class="flex justify-center my-3">
                    <p id="counter1" class="text-center text-white text-5xl  font-bold"></p>
                    <p class="text-center text-white text-5xl font-bold">+</p>
                </span>
                <p class="text-center text-white text-2xl font-medium my-3">Konsultasi</p>
            </div>
        </div>
        <div class="relative w-fit">
            <img src="/images/count-shape.png" class="w-full">
            <div class="absolute transform -translate-y-1/2 top-1/2 pb-5">
                <span class="flex justify-center my-3">
                    <p id="counter2" class="text-center text-white text-5xl  font-bold"></p>
                    <p class="text-center text-white text-5xl font-bold">+</p>
                </span>
                <p class="text-center text-white text-2xl font-medium my-3">Pelatihan Sertifikasi</p>
            </div>
        </div>
        <div class="relative w-fit">
            <img src="/images/count-shape.png" class="w-full">
            <div class="absolute transform -translate-y-1/2 left-5 right-5 top-1/2 pb-5">
                <span class="flex justify-center my-3">
                    <p id="counter3" class="text-center text-white text-5xl  font-bold"></p>
                    <p class="text-center text-white text-5xl  font-bold">+</p>
                </span>
                <p class="text-center text-white text-2xl font-medium my-3">Berita</p>
            </div>
        </div>
        <div class="relative w-fit">
            <img src="/images/count-shape.png" class="w-full">
            <div class="absolute transform -translate-y-1/2 left-5 right-5 top-1/2 pb-5">
                <span class="flex justify-center my-3">
                    <p id="counter4" class="text-center text-white text-5xl  font-bold"></p>
                    <p class="text-center text-white text-5xl  font-bold">+</p>
                </span>
                <p class="text-center text-white text-2xl font-medium my-3">Kategori Usaha</p>
            </div>
        </div>

    </div>
</div>

{{-- layanan --}}
<div class="my-28" id="layanan">
    <h2 class="text-center text-5xl font-bold ">Layanan</h2>
    <div class="autoplay my-20 mx-32">
        {{-- konsultasi --}}
        <div class="card w-full h-full bg-base-100 shadow-md mx-5">
            <figure class="px-10 pt-10">
                <img src="/images/layanan1.png" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center ">
                <p class="card-title text-2xl font-bold">Konsultasi</p>
                <p class="my-3 leading-relaxed">
                    Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan yang dimiliki oleh
                    Sudut pajak
                    sesuai dengan kebutuhan Wajib Pajak yang dibantu
                </p>
                <div class="card-actions">
                    <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
                        LEBIH LANJUT
                    </a>
                </div>
            </div>
        </div>
        {{-- pelatihan atau sertifikasi --}}
        <div class="card w-full h-full bg-base-100 shadow-md mx-5">
            <figure class="px-10 pt-10">
                <img src="/images/layanan2.png" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center ">
                <p class="card-title text-2xl font-bold">Pelatihan atau Sertifikasi</p>
                <p class="my-3 leading-relaxed">
                    Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan pelatihan lainnya terkait
                    perpajakan serta memberikan sertifikasi di bidang perpajakan.
                </p>
                <div class="card-actions">
                    <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
                        LEBIH LANJUT
                    </a>
                </div>
            </div>
        </div>
        {{-- berita --}}
        <div class="card w-full h-full bg-base-100 shadow-md mx-5">
            <figure class="px-10 pt-10">
                <img src="/images/layanan3.png" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center ">
                <p class="card-title text-2xl font-bold">Berita</p>
                <p class="my-3 leading-relaxed">
                    Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan perpajakan
                </p>
                <div class="card-actions">
                    <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
                        LEBIH LANJUT
                    </a>
                </div>
            </div>
        </div>
        {{-- kategori per bidang usaha --}}
        <div class="card w-full h-full bg-base-100 shadow-md mx-5">
            <figure class="px-10 pt-10">
                <img src="/images/layanan4.png" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center ">
                <p class="card-title text-2xl font-bold">Kategori Perbidang Usaha</p>
                <p class="my-3 leading-relaxed">
                    Memberikan layanan edukasi perpajakan yang terkait bidang-bidang usaha tertentu secara
                    spesifik
                    untuk masing-masing bidang usaha
                </p>
                <div class="card-actions">
                    <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
                        LEBIH LANJUT
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- konsultasi --}}
<div class="container my-64 mx-auto">
    <div class="grid grid-cols-2 gap-20 mx-20">
        <div class="my-auto">
            <h2 class="text-5xl font-bold text-pretty">
                Aplikasi Online Pajak Solusi Pintar Mengelola Pajak Anda
            </h2>
            <p class="text-justify leading-relaxed text-xl my-10">
                Mengelola pajak di Indonesia kini semakin mudah. Saatnya hitung, setor, dan lapor pajak perusahaan Anda
                di satu aplikasi pajak online terpadu
            </p>
            <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
                MULAI SEKARANG
            </a>
        </div>
        <div class="moving-image">
            <img src="/images/konsultasi1.png" class="w-fit">
        </div>
    </div>
</div>

{{-- berita --}}
<div class="my-40" id="berita">
    <div>
        <h2 class="text-center text-5xl font-bold">Berita</h2>
    </div>
    <div class="grid grid-cols-4 gap-5 mx-60 my-20">
        {{-- berita 1 --}}
        <div class="col-span-2">
            <div class="card w-full h-full bg-base-100 shadow-xl">
                <figure>
                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                        class="w-full h-full" alt="cover-berita" />
                </figure>
                <div class="card-body">
                    <p class="card-title font-bold">Judul Berita</p>
                    <p class="my-10">
                        Konten Berita
                        <a href="" class="text-sky-500 font-medium">read more</a>
                    </p>
                    <div class="flex gap-5 text-sky-500">
                        <span class="flex gap-2">
                            <i class="fi fi-rr-calendar-check"></i>
                            <p>tanggal</p>
                        </span>
                        <span class="flex gap-2">
                            <i class="fi fi-rr-user"></i>
                            <p>user</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {{-- berita 2 --}}
        <div class="col">
            <div class="card w-full h-full bg-base-100 shadow-xl">
                <figure>
                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                        class="w-full h-full" alt="cover-berita" />
                </figure>
                <div class="card-body">
                    <p class="card-title font-bold">Judul Berita</p>
                    <p class="my-10">
                        Konten Berita
                        <a href="" class="text-sky-500 font-medium">read more</a>
                    </p>
                    <div class="flex gap-5 text-sky-500">
                        <span class="flex gap-2">
                            <i class="fi fi-rr-calendar-check"></i>
                            <p>tanggal</p>
                        </span>
                        <span class="flex gap-2">
                            <i class="fi fi-rr-user"></i>
                            <p>user</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {{-- berita 3 --}}
        <div class="col">
            <div class="card w-full h-full bg-base-100 shadow-xl">
                <figure>
                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                        class="w-full h-full" alt="cover-berita" />
                </figure>
                <div class="card-body">
                    <p class="card-title font-bold">Judul Berita</p>
                    <p class="my-10">
                        Konten Berita
                        <a href="" class="text-sky-500 font-medium">read more</a>
                    </p>
                    <div class="flex gap-5 text-sky-500">
                        <span class="flex gap-2">
                            <i class="fi fi-rr-calendar-check"></i>
                            <p>tanggal</p>
                        </span>
                        <span class="flex gap-2">
                            <i class="fi fi-rr-user"></i>
                            <p>user</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-10 text-white">
            LIHAT BERITA LAINNYA
        </a>
    </div>
</div>

{{-- FAQ --}}
<div class="my-48 py-20 bg-white" id="faq">
    <div class="mb-20">
        <h2 class="text-center text-5xl font-bold">Frequently Asked Question</h2>
    </div>
    <div class="mx-96">
        <div tabindex="0" class="collapse collapse-arrow bg-zinc-100 my-5">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title text-xl text-blue-500 font-semibold">
                Siapa saja yang dapat menggunakan website ini?
            </div>
            <div class="collapse-content">
                <p class=" text-lg text-lg py-5">
                    UMKM Kota Batam, Mahasiswa, Masyarakat Umum, Vendor Website (Admin), dan Konsultan Spesialis Pajak
                </p>
            </div>
        </div>
        <div tabindex="0" class="collapse collapse-arrow bg-zinc-100 my-5">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title text-xl text-blue-500 font-semibold">
                Bagaimana cara User mendaftar di Website Sudut Pajak?
            </div>
            <div class="collapse-content">
                <ol class="list-decimal list-outside leading-loose  text-lg py-5 px-5">
                    <li>Klik masuk pada tab masuk</li>
                    <li>Silahkan klik daftar</li>
                    <li>Selesaikan pendaftaran dengan melengkapi biodata diri</li>
                </ol>
            </div>
        </div>
        <div tabindex="0" class="collapse collapse-arrow bg-zinc-100 my-5">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title text-xl text-blue-500 font-semibold">
                Bagaimana Cara Menggunakan Fitur Kalkulator di Sudut Pajak?
            </div>
            <div class="collapse-content">
                <p class="leading-loose text-lg pt-5">
                    Dalam Aplikasi Sudut Pajak, Anda dapat melakukan perhitungan PPh 21 atas gaji dengan langkah-langkah
                    sebagai berikut
                </p>
                <ol class="list-decimal list-outside leading-loose text-lg pb-5 px-5">
                    <li>Klik opsi 'kalkulator' pada navigasi</li>
                    <li>Isilah informasi sesuai dengan data yang diperlukan</li>
                    <li>
                        Klik tombol 'Selanjutnya', dan kalkulator akan menampilkan hasil perhitungan. Hasil ini
                        menunjukkan jumlah PPh 21 yang harus dibayarkan pada periode tertentu
                    </li>
                    <li>Jika Anda ingin mengulangi proses dengan data berbeda, cukup klik tombol 'reset'</li>
                </ol>
            </div>
        </div>
        <div tabindex="0" class="collapse collapse-arrow bg-zinc-100 my-5">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title text-xl text-blue-500 font-semibold ">
                Apa yang Dimaksud dengan Aplikasi Pajak?
            </div>
            <div class="collapse-content">
                <p class=" text-lg py-5">
                    Fitur ini akan mengarahkan Anda ke situs Tax Center Politeknik Negeri Batam, yang menawarkan layanan
                    bantuan perpajakan seperti Lapor Pajak Orang Pribadi dan Lapor Pajak Badan Usaha
                </p>
            </div>
        </div>
        <div tabindex="0" class="collapse collapse-arrow bg-zinc-100 my-5">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title text-xl text-blue-500 font-semibold">
                Apa Fungsi dari Fitur Peraturan Pajak?
            </div>
            <div class="collapse-content">
                <p class=" text-lg py-5">
                    Fitur ini berisi informasi tentang Peraturan Pajak Pusat dan Peraturan Pajak Daerah Kota Batam. Anda
                    dapat mengunduh rincian peraturan-peraturan ini dari laman tersebut
                </p>
            </div>
        </div>
    </div>
</div>

{{-- kontak --}}
<div class="relative">
    <div class="relative flex z-10">
        <img src="/images/background/contact-bg.jpg" class="w-full h-full">
    </div>
    <div class="absolute flex top-0 left-60 -mt-20 z-20">
        <div class="box-content rounded w-96 bg-white shadow-xl p-12">
            <h2 class="text-5xl font-bold my-10">Hubungi Kami</h2>
            <div class="my-10 ">
                <h3 class="text-xl font-bold mb-2">Alamat</h3>
                <p class="text-wrap">
                    Politeknik Negeri Batam <br>
                    Jl. Ahmad Yani Batam Kota, Kota Batam <br>
                    Kepulauan Riau, Indonesia
                </p>
            </div>
            <div class="my-10 ">
                <h3 class="text-xl font-bold mb-2">WhatsApp</h3>
                <a href="https://wa.me/6281378021623" class="hover:text-teal-500">
                    +62 813-7802-1623
                </a>
            </div>
            <div class="my-10 ">
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <a href="mailto: taxcenter@polibatam.ac.id" class="hover:text-teal-500">
                    taxcenter@polibatam.ac.id
                </a>
            </div>
        </div>
    </div>
</div>

@endsection