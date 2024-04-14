@extends('layouts.secondary')

@section('title', 'Video Pembelajaran PPh')
@section('judulBreadcrumbs', ' Video Pembelajaran PPh')
@section('breadcrumbs')

<li>Video Pembelajaran PPh</li>

@endsection


@section('content')
</br>

<style>
    .card-title:hover {
        text-decoration: underline; /* Menambahkan garis di bawah tulisan saat hover */
        cursor: pointer; /* Mengubah kursor menjadi pointer saat hover */
    }

    .card-wrapper {
        padding: 50px; /* Ubah sesuai kebutuhan Anda */
    }

    .card {
        margin-bottom: 20px; /* Ubah sesuai kebutuhan Anda */
    }
    </style>
<!-- Menu Pencarian -->
<div class="flex flex-wrap -mx-4 card-wrapper">
<div class="mx-auto w-full max-w-lg mb-4 justify-self-center">
    <!-- Formulir pencarian dengan ujung bulat -->
    <form action="#" method="GET" class="flex items-center bg-gradient-to-b from-blue-500 to-green-500 border border-gray-200 rounded-full shadow-sm">
        <input type="text" name="search" placeholder="Cari..." class="w-full pl-4 pr-12 py-3 focus:outline-none rounded-l-full text-lg"> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
        <button type="submit" class="text-white px-6 py-3 hover:bg-blue-600 focus:outline-none rounded-r-full text-lg">Cari</button> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
    </form>
</div>
    </br>
        </br>
             </br>
                  </br>

    <div class="flex flex-wrap -mx-4">
    <!-- Card 1 -->
    <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/j9_FezE9jpc" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <!-- Menambahkan kelas card-title untuk menargetkan efek hover -->
        <h2 class="card-title text-lg font-medium"><strong>Tips dan Trik! Cara Menghitung Pajak Penghasilan (PPh) dengan Mudah</h2></strong>
    </div>
</div>


 <!-- Card 2 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/ujDOREoD4r0" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Pengantar Hukum Pajak 7. Timbul dan Hilangnya Utang Pajak</h2></strong>
    </div>
</div>


<!-- Card 3 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/5DFZGvrBcMo" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>PPh Pasal 21 TER atas Bonus dan THR (New 2024). Simak Videonya!</h2></strong>
    </div>
</div>


<!-- Card 4 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/dz5Ik4lWRQE" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Cara Hitung dan Input PPh 21 atas THR di eBupot 21 tahun 2024</h2></strong>
    </div>
</div>

   <!-- Card 5 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/6gN8ggrw1z4" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>PPh Pasal 21 Pengertian dan tarifnya Simak Vdeo berikut untuk memahami lebih lanjut</h2></strong>
    </div>
</div>
    </br>
    </br>

   <!-- Card 6 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/at-Q9OmqmD0" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>cara hitung pph 21 pegawai tetap Simak video Berkut untuk mengetahui lebih lanjut</h2></strong>
    </div>
</div>

<!-- Card 7 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/tsfZSoRf13o" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Terbaru! Simulasi Penghitungan Tarif Efektif Rata-rata (TER) PPh Pasal 21 tahun 2024</h2></strong>
    </div>
</div>


<!-- Card 8 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/2iRlSEmWuPo" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Simak Video berikut untuk mengethaui Cara Mudah Memahami PPh Pasal 21</h2></strong>
    </div>
</div>


<!-- Card 9 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/IV514aauars" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Simak Video berikut untuk mengetahui PPh Pasal 21 TER (Tarif Efektif Rata-rata) Tahun 2024</h2><strong>
    </div>
</div>

<!-- Card 10 -->
<div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4" onclick="window.location.href='/pembelajaran/video/detail0'">
    <!-- Embedded Video -->
    <iframe width="100%" height="220" src="https://www.youtube.com/embed/LVpAdDgc3PA" frameborder="0" allowfullscreen></iframe>
    <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong> Simak video ini untuk Menghitung PPh 21 Pegawai Masuk dan Berhenti Kerja di Tahun Berjalan</h2></strong>
    </div>
</div>






    
@endsection

    






   