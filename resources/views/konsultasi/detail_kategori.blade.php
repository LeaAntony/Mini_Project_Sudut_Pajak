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
        <!-- Carousel -->
        <div class="carousel w-full">
            <div id="item1" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/konsultasi/Konsultasi2.png" class="w-full" />
                <p class="text-center text-sm mt-2">Sudut pajak memiliki spesialis yang berkompeten terhadap
                    permasalahan pajak yang dialami oleh klien.</p>
            </div>
            <div id="item2" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/konsultasi/Pajak.png" class="w-full" />
                <p class="text-center text-sm mt-2">Sudut pajak menyediakan 2 (dua) metode konsultasi: Live chat maupun
                    via Microsoft team. </p>
            </div>
            <div id="item3" class="carousel-item w-full flex flex-col items-center">
                <img src="/images/konsultasi/Konsultasi2.png" class="w-full" />
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
        <!-- End Carousel -->

        <div>
            <p class="font-bold text-2xl">Mengapa Chat Spesialis disini?</p>
        </div>
        <div class="flex items-center mt-8">
            <img src="/images/konsultasi/layanan1.png" class="w-20 h-20" alt="Layanan">
            <div class="ml-4">
                <p class="text-sm">Konsultasikan kebutuhan Pajak Anda dengan Kami Bicara langsung dengan konsultan kami.
                </p>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/konsultasi/layanan2.png" class="w-20 h-20" alt="Layanan">
            <div class="ml-4">
                <p class="text-sm">Sudut Pajak dapat membantu permasalahan perpajakan anda. </p>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/konsultasi/layanan3.png" class="w-20 h-20" alt="Layanan">
            <div class="ml-4">
                <p class="text-sm">Chat spesialis pajak dapat membantu anda untuk memecahkan masalah perpajakan anda</p>
            </div>
        </div>
    </div>
    <!-- End Konten di sebelah kiri -->

    <div class="w-3/5 p-20 mx-auto">
        <!-- Konten di sebelah kanan -->
        <div>
            <p class="font-bold text-2xl">Rekomendasi Spesialis</p></br>
            <p class="text-sm">Konsultasi dengan spesialis siaga kami</p></br>
        </div>
        <a href="/konsultasi" class="btn">Kembali</a>
        </br>
        </br>

        <div class="flex mt-8">
            <img src="/images/konsultasi/pakar-1.jpg" class="w-32 h-32" alt="Pakar Pajak">
            <div class="ml-4">
                <p class="font-bold">Drs. Hakase Miurae</p>
                <p class="text-sm">PPh badan</p>
                <p class="text-sm">5 tahun </p></br>
                <a href="/konsultasi/chat" class="btn btn-info text-white btn-sm text-xs">Chat</a>
            </div>
        </div>

        <div class="flex mt-8">
            <img src="/images/konsultasi/pakar-2.jpg" class="w-32 h-32" alt="Pakar Pajak">
            <div class="ml-4">
                <p class="font-bold">Melisa Syla</p>
                <p class="text-sm">PPh badan</p>
                <p class="text-sm">5 tahun</p></br>
                <a href="/konsultasi/chat" class="btn btn-info text-white btn-sm text-xs">Chat</a>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/konsultasi/pakar-3.png" class="w-32 h-32" alt="Pakar Pajak">
            <div class="ml-4">
                <p class="font-bold">Park Kim</p>
                <p class="text-sm">PPh badan</p>
                <p class="text-sm">5 tahun</p></br>
                <a href="/konsultasi/chat" class="btn btn-info text-white btn-sm text-xs">Chat</a>
            </div>
        </div>

        <div class="flex items-center mt-8">
            <img src="/images/konsultasi/pakar-4.jpg" class="w-32 h-32" alt="Pakar Pajak">
            <div class="ml-4">
                <p class="font-bold">Mikasa Ackerman</p>
                <p class="text-sm">PPh badan</p>
                <p class="text-sm">5 tahun</p></br>
                <a href="/konsultasi/chat" class="btn btn-info text-white btn-sm text-xs">Chat</a>
            </div>
        </div>
    </div>
</div>
<!-- End Konten di sebelah kanan -->

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