@extends('layouts.secondary')

@section('title', 'Forum Pajak')
@section('judulBreadcrumbs', 'Forum Pajak')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Forum Pajak</li>

@endsection

@section('content')
</br>
</br>
<!-- Menu Pencarian -->
<div class="mx-auto w-full max-w-lg mb-4 justify-self-center">
    <!-- Formulir pencarian dengan ujung bulat -->
    <form action="#" method="GET" class="flex items-center bg-gradient-to-b from-blue-500 to-green-500 border border-gray-200 rounded-full shadow-sm">
        <input type="text" name="search" placeholder="Cari..." class="w-full pl-4 pr-12 py-3 focus:outline-none rounded-l-full text-lg"> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
        <button type="submit" class="text-white px-6 py-3 hover:bg-blue-600 focus:outline-none rounded-r-full text-lg">Cari</button> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
    </form>
</div>

</br>
</br>

<!-- Container untuk Card 1, Card 2, dan Card 3 -->
<div class="container mx-auto mt-8 flex">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mr-8" style="max-width: 500px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Pengaruh Kebijakan Pajak Terhadap Investasi</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=48" alt="User Avatar 1" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">John Doe</p> <
                <span class="mx-2">|</span>
                <p>10 Agustus 2024</p> 
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Investasi memiliki peran penting dalam pertumbuhan ekonomi. Bagaimana kebijakan pajak mempengaruhi keputusan perusahaan dalam berinvestasi? Diskusikan pengaruhnya di sini.</p> 
            <div class="mt-4 flex justify-end">
                <a href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mr-8" style="max-width: 500px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Pengaruh Reformasi Pajak Terhadap Perekonomian Global</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/forum/elonmusk.jpg" alt="User Avatar 3" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Elon Musk</p> 
                <span class="mx-2">|</span>
                <p>20 Agustus 2024</p>
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Reformasi pajak memiliki dampak signifikan pada perekonomian global. Diskusikan perubahan kebijakan pajak terbaru dan bagaimana hal itu mempengaruhi ekonomi di berbagai negara.</p> 
            <div class="mt-4 flex justify-end">
                <a href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Pentingnya Pendidikan Pajak bagi Generasi Muda</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/forum/emma.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Emma Watson</p> 
                <span class="mx-2">|</span>
                <p>15 Agustus 2024</p> 
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Pendidikan pajak sangat penting bagi generasi muda untuk memahami tanggung jawab mereka dalam sistem perpajakan. Diskusikan strategi dan metode yang efektif untuk memperkenalkan konsep pajak kepada anak-anak dan remaja.</p> 
            <div class="mt-4 flex justify-end">
                <a href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>
</div>


</br>
</br>

<!-- card 4-->
<div class="container mx-auto mt-8 flex">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mr-8" style="max-width: 475px; margin-left: 5px"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Teknologi dalam Meningkatkan Kepatuhan Pajak</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/forum/henrycavill.jpg" alt="User Avatar 1" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Henry Cavill</p>
                <span class="mx-2">|</span>
                <p>10 Agustus 2024</p> 
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Dalam dunia yang semakin terhubung secara digital, teknologi memainkan peran penting dalam meningkatkan kepatuhan pajak. Mari kita diskusikan bagaimana teknologi seperti blockchain, kecerdasan buatan, dan analisis data</p>
            <div class="mt-4 flex justify-end">
                <a href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 5 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px;">
    <div class="px-6 py-4">
        <h2 class="text-xl font-bold mb-2">Transparansi Pajak dalam Mendorong Pembangunan Ekonomi Berkelanjutan</h2>
        <div class="flex items-center text-sm text-gray-600">
            <img src="/images/forum/milliebrown.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
            <p class="font-semibold">Mille Bobby Brown</p> 
            <span class="mx-2">|</span>
            <p>14 Agustus 2024</p> 
        </div>
    </div>
    <!--Topic -->
    <div class="px-6 py-4">
        <p class="text-gray-700">Transparansi pajak menjadi kunci dalam membangun ekonomi yang berkelanjutan dan inklusif. Bergabunglah dalam diskusi untuk menjelajahi peran transparansi dalam mengurangi kesenjangan pajak,
             memperkuat integritas sistem perpajakan, dan mendukung pembangunan ekonomi yang berkelanjutan</p> 
        <div class="mt-4 flex justify-end">
            <a href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</a> 
        </div>
    </div>
</div>

   <!-- Card 6 -->
   <div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px; margin-left: 40px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Dampak Kebijakan Pajak Terhadap Pengembangan Usaha Kecil Menengah </h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/forum/jamie.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Jamie Bower</p> 
                <span class="mx-2">|</span>
                <p>15 Agustus 2024</p> 
            </div>
        </div>
        <!--Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Kebijakan pajak memiliki dampak yang signifikan pada perkembangan usaha kecil menengah (UKM). Mari kita jelajahi bagaimana berbagai kebijakan pajak, seperti tarif pajak, insentif, dan pengaturan pajak penghasilan, memengaruhi operasional</p> 
            <div class="mt-4 flex justify-end">
                <p href="/forum_pajak/detail_forum_pajak" class="text-blue-500">Lihat Topik</p>
                <span class="mx-2">|</span>
                <p href="" class="text-blue-500">Hapus</p>
            </div>
        </div>`
    </div>
</div>

<div>
    <div class="p-4">
    </div>
    <div class="px-6 py-4">
        <div class="mt-4 flex justify-between items-center ">
            <div class="ml-auto"> 
            <a href="#" onclick="showPopup()" class="text-white bg-gradient-to-r from-blue-500 to-green-500 hover:bg-gradient-to-r hover:from-blue-600 hover:to-green-600 px-6 py-3 focus:outline-none rounded-full text-lg">Upload Forum Anda</a>
            </div>
        </div>
    </div>
</div>

<div id="popup" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-4xl transform scale-0 transition-transform duration-300 w-full"> <!-- Menambahkan max-w-4xl untuk memperluas lebar kartu -->
        <h2 class="text-xl font-bold mb-4">Tambah Forum Anda</h2>
        <form id="forumForm">
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul Topik:</label>
                <input type="text" id="judul" name="judul" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Topik:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
            </div>
            <div class="flex justify-end">
            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 to-green-500 hover:bg-gradient-to-r hover:from-blue-600 hover:to-green-600 px-6 py-3 focus:outline-none rounded-full text-lg">Upload Forum</button>
            </div>
        </form>
        <button onclick="hidePopup()" class="absolute top-0 right-0 m-4 text-gray-600 hover:text-gray-800 focus:outline-none">&times;</button>
    </div>
</div>


<script>
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("hidden");
        setTimeout(function() {
            popup.querySelector(".transform").classList.add("scale-100");
        }, 50);
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.querySelector(".transform").classList.remove("scale-100");
        setTimeout(function() {
            popup.classList.add("hidden");
        }, 300);
    }

    document.getElementById("forumForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        var judul = document.getElementById("judul").value;
        var deskripsi = document.getElementById("deskripsi").value;

       
        console.log("Judul Forum: ", judul);
        console.log("Deskripsi Forum: ", deskripsi);

        
        hidePopup();
    });
</script>

</br>
</br> 

@endsection

