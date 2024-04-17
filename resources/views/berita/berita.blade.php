@extends('layouts.secondary')

@section('title', 'Berita')
@section('judulBreadcrumbs', 'Berita')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Berita</li>

@endsection

@section('content')

</br>
</br>


<div class="article-container">
    <!-- Kelompokkan artikel dalam satu div grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- berita 1 -->
        <div class="relative bg-white" style="margin-left: 32%; width: 110%; height: 100%;">
            <img src="/images/berita/berita1.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Amsakar Achmad, Terus Dorong Pertumbuhan UMKM Menggerakkan Ekonomi Lokal</strong></h2>
                <p class="text-sm text-gray-600 mt-2">Wakil Walikota Kota Batam, Amsakar Achmad, terus memperkuat upayanya dalam mendorong pertumbuhan Usaha Mikro, Kecil, dan Menengah (UMKM) sebagai salah satu pilar utama dalam mengge <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 14, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>
        
        <!-- berita 2 -->
        <div class="relative bg-white" style="width: 55%; margin-left: 47%; height: 100%;">
            <img src="/images/berita/beritaberita2.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Pajak Pengiriman Menjadi Kendala Usaha UMKM Di Batam</strong></h2>
                </br>
                <p class="text-sm text-gray-600 mt-2">Konsultan UMKM Batam terus melakukan perekrutan dan pembibingan 
                    kepada masyarakat. Salah satu mitranya adalah Polma Chaniago, pemilik Cresspom bawang goreng, yang berhasil mengubah haluan dari usaha konvensional menjadi usaha yang lebih berkelanjutan dan inovatif. Dengan bimbingan dan dukungan dari konsultan UMKM Batam, Polma Chaniago mampu meningkatkan kualitas produknya, memperluas jaringan pemasarannya, dan meraih kesuksesan dalam bisnisnya. <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                             
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 14, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>

        <!-- berita 3 -->
        <div class="relative bg-white" style="width: 55%; margin-left: 7%; height: 100%;">
            <img src="/images/berita/packaging.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Upaya Tingkatkan Pemasaran Produk UMKM, Pemko Batam Gelar Pelatihan Packaging</strong></h2>
             </br>
                <p class="text-sm text-gray-600 mt-2">Upaya Tingkatkan Pemasaran Produk UMKM, Pemko Batam Gelar Pelatihan Packaging
                Pemerintah Kota Batam melalui Dinas Koperasi dan Usaha Mikro, menggelar Pelatihan Packaging dalam Rangka Meningkatkan Pemasaran Produk UMKM Kota Batam, yang dibuka secara langsung  <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                                  </br>
                                </br>
                             </br>
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 15, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- berita 4 -->
        <div class="relative bg-white" style="margin-left: 32%; width: 110%; height: 100%;">
            <img src="/images/berita/pemko.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Pemko Batam Menggelar Pelatihan Strategi Pemasaran untuk UMKM</strong></h2>
                <p class="text-sm text-gray-600 mt-2">Pemerintah Kota Batam telah meluncurkan program pelatihan strategi pemasaran yang bertujuan untuk mendukung dan meningkatkan pemasaran produk UMKM di kota tersebut. Inisiatif ini, yang diselenggarakan oleh Dinas Koperasi dan Usaha Mikro <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 14, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>

        <!-- berita 5 -->
        <div class="relative bg-white" style="width: 55%; margin-left: 47%; height: 100%;">
            <img src="/images/berita/makanan.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Pajak Menjadi Pertimbangan Serius Bagi Pelaku Usaha Kuliner Indonesia</strong></h2>
                </br>
                <p class="text-sm text-gray-600 mt-2">Pajak menjadi salah satu aspek yang tidak dapat dihindari dalam dunia usaha kuliner di Indonesia. Meskipun demikian, implikasi pajak terhadap pelaku usaha kuliner bisa menjadi pertimbangan serius yang memengaruhi keberlangsungan usaha mereka.
                    Dalam industri kuliner, pajak diterapkan pada berbagai tingkatan, termasuk pajak penjualan, pajak penghasilan, serta pajak daerah seperti pajak restoran. Pajak penjualan, misalnya, mempengaruhi   <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 14, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>
      <!-- berita 6 -->
      <div class="relative bg-white" style="width: 55%; margin-left: 7%; height: 100%;">
            <img src="/images/berita/gaya.jpg" alt="Card Image" class="w-full">
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Menggali Harta Karun Fiskal dalam Dunia Fashion: Strategi Pajak untuk Sukses Bisnis</strong></h2>
             </br>
                <p class="text-sm text-gray-600 mt-2">Industri fashion tidak hanya tentang gaya dan tren, tetapi juga melibatkan strategi keuangan yang cerdas untuk menghadapi tantangan fiskal. Dalam dunia yang terus berubah dan kompetitif ini, memahami peran pajak dan menerapkan strategi yang tepat dapat menjadi kunci keberhasilan bagi perusahaan fashion.
                Salah satu aspek yang perlu dipahami dalam industri fashion adalah pajak penjualan. Dengan harga produk yang seringkali menjadi <a href="/berita/detail_berita" class="text-blue-500">read
                        more</a></p>
                <div class="flex items-center mt-4 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">March 15, 2024</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>

<div class="flex items-center justify-end">
  <button class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2">
    Previous
  </button>
  <button class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2">
    1
  </button>
  <button class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2">
    Next
  </button>
</div>
</br>

        
  
@endsection