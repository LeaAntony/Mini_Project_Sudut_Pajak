@extends('layouts.main')

@section('title', 'Konsultasi')

@section('content')

<style>
    p::after {
        content: "";
        position: absolute;
        bottom: 2px;
        left: 0;
        width: 11%;
        height: 10px;
        background: linear-gradient(to right, #10b983, #0ea5e8);
        z-index: -1;
        display: block;
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="flex flex-row">
    <div class="w-2/5 p-20 mx-auto">
        <!-- Konten di sebelah kiri -->
        <div class="text-center">
            <p class="font-bold text-2xl">Chat spesialis pajak</p></br>
            <p class="text-sm">Layanan konsultasi kebutuhan Pajak Anda dengan Kami</p></br></br>
        </div>

        <!-- Carousel-->
        <div class="carousel w-full">
            <div id="item1" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/Konsultasi2.png" class="w-full" />
                <p class="text-center text-sm mt-2">Sudut pajak memiliki spesialis yang berkompeten terhadap
                    permasalahan pajak yang dialami oleh klien.</p>
            </div>
            <div id="item2" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/Pajak.png" class="w-full" />
                <p class="text-center text-sm mt-2">Sudut pajak menyediakan 2 (dua) metode konsultasi: Live chat maupun
                    via Microsoft team. </p>
            </div>
            <div id="item3" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/Konsultasi2.png" class="w-full" />
                <p class="text-center text-sm mt-2">Sudut pajak memiliki menu penjadwalan untuk mengatur waktu
                    konsultasi</p>
            </div>
        </div>
        <div class="flex justify-center w-full py-2 gap-2">
            <a href="#item1" class="btn btn-xs">1</a>
            <a href="#item2" class="btn btn-xs">2</a>
            <a href="#item3" class="btn btn-xs">3</a>
        </div>
        </br>
        </br>
        <!-- End Carousel-->

        <div>
            <p class="font-bold text-2xl">Mengapa Chat Spesialis disini?</p>
        </div>
        <div class="flex items-center mt-8">
            <img src="/images/Layanan1.png" class="w-20 h-20" alt="Layanan">
            <div class="ml-4">
                <p class="text-sm">Konsultasikan kebutuhan Pajak Anda dengan Kami Bicara langsung dengan konsultan kami.
                </p>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/Layanan2.png" class="w-20 h-20" alt="Layananr">
            <div class="ml-4">
                <p class="text-sm">Sudut Pajak dapat membantu permasalahan perpajakan anda. </p>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/Layanan3.png" class="w-20 h-20" alt="Layanan">
            <div class="ml-4">
                <p class="text-sm">Chat spesialis pajak dapat membantu anda untuk memecahkan masalah perpajakan anda</p>
            </div>
        </div>
    </div>
    <!-- End Konten di sebelah kiri -->

    <div class="w-3/5 p-20 mx-auto">
        <!-- Konten di sebelah kanan -->
        <!-- Menu Pencarian -->
        <div class="flex flex-wrap -mx-4 card-wrapper">
            <div class="mx-auto w-full ml-4 mb-4 justify-self-center">
                <form action="#" method="GET">
                    <input type="text" name="search" placeholder="Cari Spesialis disini"
                        class="w-full h-10 pl-2 pr-12 py-3 text-0.5xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent rounded-l-lg rounded-r-lg border border-gray-300">
                </form>
            </div>
        </div>
        <!-- End Menu Pencarian -->

        <div>
            <p class="font-bold text-2xl">Selamat Datang di Konsultasi</p></br>
            <p class="text-sm">Ingin melakukan konsultasi dengan pakar pajak? tekan link dibawah ini</p></br>
        </div>
        <button class="btn btn-sm btn-info text-white">Chat Konsultasi</button>
        </br>
        </br>

        <!-- Rekomendasi Pakar Pajak -->
        <div>
            <p class="font-bold text-2xl">Rekomendasi Pakar Pajak</p>
            <p class="text-sm">Konsultasi dengan Pakar Pajak siaga kami</p></br>
        </div>

        <div class="flex">
            <!-- Pakar Pajak 1 -->
            <div class="mr-4 text">
                <img src="/images/konsultasi/pakar-1.jpg" class="w-32 h-32" alt="Pakar Pajak">
            </div>
            <div class="mr-4">
                <p class="font-bold">Drs. Hakase Miurae</p>
                <p>PPh badan</p>
                <div class="ml-4">
                    <span class="flex items-center">
                        <i class="fa-solid fa-suitcase"></i>
                        <p class="font-bold text-sm ml-2">1 tahun</p>
                    </span>
                </div>
            </div>

            <!-- Pakar Pajak 2 -->
            <div class="ml-20">
                <img src="/images/konsultasi/pakar-5.png" class="w-32 h-32" alt="Pakar Pajak">
            </div>
            <div class="ml-4">
                <p class="font-bold">Hinata Hyuga</p>
                <p>PPh Pasal 21</p>
                <div class="ml-4">
                    <span class="flex items-center">
                        <i class="fa-solid fa-suitcase"></i>
                        <p class="font-bold text-sm ml-2">3 tahun</p>
                    </span>
                </div>
            </div>
        </div>
        </br>
        <!-- End Rekomendasi Pakar Pajak -->

        <!-- Kategori Pakar Pajak -->
        <div>
            <p class="font-bold text-2xl">Kategori Pakar Pajak</p>
            <p class="text-sm">Pilih kategori Pakar Pajak yang sesuai kondisi</p></br>
        </div>

        <a href="/detail_kategori">
            <div class="flex">
                <!-- Kategori 1 -->
                <div class="flex flex-col items-center mr-8">
                    <img src="/images/konsultasi/3_badan.png" class="w-30 h-30" alt="Kategori 1">
                    <div class="mt-2">
                        <p class=" text-center text-sm">PPh Badan</p>
                    </div>
                </div>

                <!-- Kategori 2 -->
                <div class="flex flex-col items-center mr-8">
                    <img src="/images/konsultasi/1_tahunanPribadi.png" class="w-20 h-20" alt="Kategori 2">
                    <div class="mt-2">
                        <p class="text-center text-sm">PPh tahunan orang pribadi</p>
                    </div>
                </div>

                <!-- Kategori 3 -->
                <div class="flex flex-col items-center mr-8">
                    <img src="/images/konsultasi/4_pasal21.png" class="w-30 h-30" alt="Kategori 3">
                    <div class="mt-2">
                        <p class="text-center text-sm">PPh Pasal 21</p>
                    </div>
                </div>

                <!-- Kategori 4 -->
                <div class="flex flex-col items-center mr-8">
                    <img src="/images/konsultasi/2_22dan23.png" class="w-20 h-20" alt="Kategori 4">
                    <div class="mt-2">
                        <p class="text-center text-sm">PPh Pasal 22 dan 23</p>
                    </div>
                </div>

                <!-- Kategori 5 -->
                <div class="flex flex-col items-center mr-8">
                    <img src="/images/konsultasi/5_pasal25.png" class="w-30 h-30" alt="Kategori 5">
                    <div class="mt-2">
                        <p class="text-center text-sm">PPh Pasal 25</p>
                    </div>
                </div>
            </div>
    </div>
</div>
</a>
<!-- End Kategori Pakar Pajak -->

<div class="w-full p-20 mx-auto">
    <div class="relative">
        <p class="font-bold text-4xl z-10 relative">
            Cara Menghubungi Spesialis Secara Online?
        </p>
        <div class="absolute bottom-0 left-0 w-25 h-10 z-0 bg-gradient-to-r from-green-400 to-blue-500"></div></br>
        <p class="text-sm">Konsultasi dengan pakar pajak secara daring dapat dilakukan dengan mudah. Kami menyediakan
            konsultasi dengan
            berbagai permasalah pajak seperti PPh badan, PPh tahunan Orang Pribadi, PPh Pasal 21, PPh Pasal 22 dan PPh
            Pasal 25. Hanya dengan 3 (tiga) langkah Anda dapat langsung terhubung dengan konsultan spesialis yang anda
            butuhkan. </p>
        <ol class="list-decimal ml-10 mt-4 text-sm">
            <li> Pilih konsultasi spesialis sesuai dengan topik yang Anda butuhkan dikategori spesialis kemudian pilih
                tombol chat sekarang. Jika user belum mendaftar maka secara otomatis akan diarahkan untuk mendaftar
                terlebih dahulu dengan mengisi data.</li>
            <li>Setelah Langkah 1, akan muncul data pribadi spesialis dan ada 3 (tiga) menu untuk melakukan reservasi
                yaitu, chat, telepon dan zoom. Kemudian pilih sesuai kebutuhan anda dengan mengisi data janji temu
                online dengan pakar kami. </li>
            <li>Setelah mengisi data janji temu online, maka akan langsung diarahkan ke dashboard user yang berisi
                jadwal konsultasi yang telah di reservasi sebelumnya dan ada tombol aksi jika user ingin cancel atau
                reschedule.</li>
        </ol>
    </div>

    @endsection
