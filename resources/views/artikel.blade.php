@extends('layouts.secondary')

@section('title', ' Artikel Pembelajaran PPh')
@section('judulBreadcrumbs', ' Artikel Pembelajaran PPh')
@section('breadcrumbs')

<li>Artikel Pembelajaran PPh</li>

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
<!-- Artikel 1 -->
<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
<div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-2">
        <div class="card-body">
        <h2 class="card-title text-lg font-medium"><strong>Pengaruh Pajak Penghasilan (PPh) terhadap Cash Flow UMKM dalam Industri Fashion</strong></h2>
            <img src="images/shop.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Pajak Penghasilan (PPh) merupakan kewajiban yang tak terhindarkan bagi Usaha Mikro, Kecil, dan Menengah
                (UMKM) di industri fashion. Bagaimana PPh memengaruhi aliran kas (cash flow) merupakan perhatian serius
                bagi para pelaku usaha ini.
                Dalam industri fashion yang dinamis, setiap penerimaan dan pengeluaran memiliki dampak signifikan
                terhadap kelangsungan bisnis. PPh menjadi salah satu faktor yang dapat mengganggu keseimbangan aliran
                kas, terutama jika tidak dikelola dengan bijak. <a href="artikel_materi1" class="text-blue-500">Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 14, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!-- Artikel 2 -->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-2">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Strategi Pemasaran Digital untuk Meningkatkan Visibilitas dan Penjualan UMKM di Era Digital</strong></h2>
            <img src="images/digital.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam era digital yang terus berkembang, UMKM (Usaha Mikro, Kecil, dan Menengah) dihadapkan pada tantangan baru dan peluang baru. Salah satu aspek penting yang perlu dipertimbangkan oleh UMKM adalah strategi pemasaran digital untuk meningkatkan visibilitas dan penjualan produk atau layanan mereka.
                Pemasaran digital telah menjadi kunci sukses bagi banyak UMKM dalam menghadapi persaingan di era digital ini. Dengan memanfaatkan berbagai platform dan teknik pemasaran digital.<a href="artikel_materi2" class="text-blue-500"> Read more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 15, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!-- Artikel 3 -->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-2">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Membangun Strategi Pemasaran Inovatif untuk Meningkatkan Daya Saing UMKM di Pasar Modern</strong></h2>
            <img src="images/pasar.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam menghadapi lingkungan bisnis yang semakin kompetitif, UMKM (Usaha Mikro, Kecil, dan Menengah) perlu mengembangkan strategi pemasaran yang inovatif guna memperkuat posisi mereka di pasar dan meningkatkan penjualan produk atau layanan.
                Salah satu langkah penting adalah memanfaatkan media konvensional secara optimal. UMKM dapat memilih saluran pemasaran yang sesuai dengan karakteristik produk atau layanan mereka, seperti iklan di koran lokal, majalah industri, atau pamflet yang didistribusikan di area strategis. <a href="artikel_materi3" class="text-blue-500">Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 16, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!-- ARtikel 4 -->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-2">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Membangun Kemitraan yang Berkelanjutan: Kunci Kesuksesan UMKM di Pasar Global</strong></h2>
            <img src="images/pasarglobal.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam era globalisasi ini, kemitraan bisnis menjadi semakin penting bagi Usaha Mikro, Kecil, dan Menengah (UMKM) yang ingin 
                memperluas jangkauan dan meningkatkan daya saing mereka. Langkah pertama dalam membangun kemitraan yang berkelanjutan adalah dengan mengidentifikasi mitra potensial yang memiliki visi dan nilai yang sejalan. Misalnya, UMKM dapat mencari mitra yang 
                memiliki spesialisasi yang komplementer atau mitra distribusi yang dapat membantu mereka menjangkau pasar baru. Komunikasi yang terbuka dan jujur menjadi landasan yang penting dalam membangun hubungan yang kokoh.<a href="artikel_materi4" class="text-blue-500"> Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 17, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!-- Artikel 5-->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-4">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Meningkatkan Produktivitas Kerja di Lingkungan UMKM: Strategi Efektif yang Dapat Diterapkan</strong></h2>
            <img src="images/umkm.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam lingkungan Usaha Mikro, Kecil, dan Menengah (UMKM), peningkatan produktivitas kerja menjadi kunci utama untuk mencapai efisiensi dan kesuksesan bisnis. Salah satu strategi yang dapat 
                diterapkan adalah dengan menginvestasikan dalam teknologi yang tepat, seperti perangkat lunak manajemen proyek atau alat kolaborasi online, yang dapat mempermudah koordinasi antar tim dan mempercepat proses kerja. <a href="artikel_materi5" class="text-blue-500">Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 18, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!--Artikel 6-->
     <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-4">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Dinamika Politik Terkait Reformasi Pajak Penghasilan: Implikasi bagi Warga Negara dan Perekonomian</strong></h2>
            <img src="images/politik.jpg" alt="Card Image" class="card-image w-full"> 
            <p class="text-sm text-gray-600 mt-2">Dalam konteks politik, perdebatan tentang pajak penghasilan merupakan topik yang selalu hangat. Reformasi pajak penghasilan, 
                 baik di tingkat nasional maupun global, sering kali menjadi agenda penting bagi para pemimpin politik dan pengambil kebijakan. Implikasi dari kebijakan perpajakan ini tidak
                 hanya memengaruhi warga negara secara langsung, tetapi juga berdampak pada perekonomian secara keseluruhan. <a href="artikel_materi6" class="text-blue-500"> Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 19, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>

    <!--Artikel 7-->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-4">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Meningkatkan Efisiensi Operasional UMKM melalui Teknologi Berbasis Cloud</strong></h2>
            <img src="images/cloud.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam era digital ini, penggunaan teknologi berbasis cloud telah menjadi salah satu strategi yang efektif dalam meningkatkan efisiensi operasional Usaha Mikro, Kecil, dan Menengah (UMKM). Cloud computing menyediakan akses mudah dan fleksibel ke berbagai layanan IT, mulai 
                 penyimpanan data hingga aplikasi bisnis, tanpa perlu menginvestasikan biaya besar dalam infrastruktur IT. Salah satu manfaat utama dari teknologi cloud adalah kemampuannya untuk menyediakan penyimpanan data yang aman dan terjangkau <a href="artikel_materi7" class="text-blue-500">Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 20, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>
</br>
     
<!--Artikel 8 -->
    <div class="card bg-base-100 shadow-xl relative pl-4 pr-4 pt-2 pb-4 max-w-sm mx-auto mb-4 mr-4">
        <div class="card-body">
            <h2 class="card-title text-lg font-medium"><strong>Membangun Kebijakan Inklusif untuk Menyokong Pertumbuhan UMKM dalam Ekonomi Digital</strong></h2>
            <img src="images/ekonomi.jpg" alt="Card Image" class="card-image w-full">
            <p class="text-sm text-gray-600 mt-2">Dalam konteks globalisasi dan transformasi digital yang terus berlangsung, Usaha Mikro, Kecil, dan Menengah (UMKM) menjadi bagian integral dari perekonomian modern.
                    Namun, dalam menghadapi tantangan yang semakin kompleks, UMKM perlu menyesuaikan strategi mereka untuk tetap relevan dan bersaing dalam pasar yang berubah dengan cepat.
                    Salah satu tantangan utama yang dihadapi oleh UMKM adalah bagaimana mereka dapat memanfaatkan teknologi digital untuk meningkatkan visibilitas  <a href="artikel_materike8" class="text-blue-500">Read
                    more</a></p>
                    <div class="flex items-center mt-4 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="mr-1 text-sm">March 21, 2024</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
        </div>
    </div>
    


@endsection


