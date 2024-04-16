@extends('layouts.secondary')

@section('title', 'Forum Pajak')
@section('judulBreadcrumbs', 'Forum Pajak')
@section('breadcrumbs')

<li><a href="index.php">Beranda</a></li>
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
                <a href="#" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mr-8" style="max-width: 500px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Pengaruh Reformasi Pajak Terhadap Perekonomian Global</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/elonmusk.jpg" alt="User Avatar 3" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Elon Musk</p> 
                <span class="mx-2">|</span>
                <p>20 Agustus 2024</p>
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Reformasi pajak memiliki dampak signifikan pada perekonomian global. Diskusikan perubahan kebijakan pajak terbaru dan bagaimana hal itu mempengaruhi ekonomi di berbagai negara.</p> 
            <div class="mt-4 flex justify-end">
                <a href="#" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Pentingnya Pendidikan Pajak bagi Generasi Muda</h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/emma.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Emma Watson</p> 
                <span class="mx-2">|</span>
                <p>15 Agustus 2024</p> 
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Pendidikan pajak sangat penting bagi generasi muda untuk memahami tanggung jawab mereka dalam sistem perpajakan. Diskusikan strategi dan metode yang efektif untuk memperkenalkan konsep pajak kepada anak-anak dan remaja.</p> 
            <div class="mt-4 flex justify-end">
                <a href="#" class="text-blue-500">Lihat Topik</a> 
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
                <img src="/images/henrycavill.jpg" alt="User Avatar 1" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Henry Cavill</p>
                <span class="mx-2">|</span>
                <p>10 Agustus 2024</p> 
            </div>
        </div>
        <!-- Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Dalam dunia yang semakin terhubung secara digital, teknologi memainkan peran penting dalam meningkatkan kepatuhan pajak. Mari kita diskusikan bagaimana teknologi seperti blockchain, kecerdasan buatan, dan analisis data</p>
            <div class="mt-4 flex justify-end">
                <a href="#" class="text-blue-500">Lihat Topik</a> 
            </div>
        </div>
    </div>

    <!-- Card 5 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px;">
    <div class="px-6 py-4">
        <h2 class="text-xl font-bold mb-2">Transparansi Pajak dalam Mendorong Pembangunan Ekonomi Berkelanjutan</h2>
        <div class="flex items-center text-sm text-gray-600">
            <img src="/images/milliebrown.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
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
            <a href="#" class="text-blue-500">Lihat Topik</a> 
        </div>
    </div>
</div>

   <!-- Card 6 -->
   <div class="bg-white rounded-lg shadow-md overflow-hidden" style="max-width: 500px; margin-left: 40px;"> 
        <div class="px-6 py-4">
            <h2 class="text-xl font-bold mb-2">Dampak Kebijakan Pajak Terhadap Pengembangan Usaha Kecil Menengah </h2> 
            <div class="flex items-center text-sm text-gray-600">
                <img src="/images/jamie.jpg" alt="User Avatar 2" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">Jamie Bower</p> 
                <span class="mx-2">|</span>
                <p>15 Agustus 2024</p> 
            </div>
        </div>
        <!--Topic -->
        <div class="px-6 py-4">
            <p class="text-gray-700">Kebijakan pajak memiliki dampak yang signifikan pada perkembangan usaha kecil menengah (UKM). Mari kita jelajahi bagaimana berbagai kebijakan pajak, seperti tarif pajak, insentif, dan pengaturan pajak penghasilan, memengaruhi operasional</p> 
            <div class="mt-4 flex justify-end">
                <a href="#" class="text-blue-500">Lihat Topik</a>
            </div>
        </div>`
    </div>
</div>
</br>
</br>



@endsection

