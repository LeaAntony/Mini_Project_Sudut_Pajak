@extends('layouts.secondary')

@section('title', ' Artikel Pembelajaran PPh')
@section('judulBreadcrumbs', ' Artikel Pembelajaran PPh')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/pembelajaran">Pembelajaran PPh</a></li>
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


<div class="container mx-auto mb-40">
    <div class="mt-20 mb-10 text-center text-5xl">
        <!-- artikel1 -->
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Pengaruh Pajak Penghasilan (PPh) terhadap Cash Flow UMKM dalam Industri Fashion</p>
            <br>
            <img src="/images/shop.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Pajak Penghasilan (PPh) merupakan kewajiban yang tak terhindarkan bagi Usaha Mikro, Kecil, dan Menengah
                (UMKM) di industri fashion. Bagaimana PPh memengaruhi aliran kas (cash flow) merupakan perhatian serius
                bagi para pelaku usaha ini.
                Dalam industri fashion yang dinamis, setiap penerimaan dan pengeluaran memiliki dampak signifikan
                terhadap kelangsungan bisnis. PPh menjadi salah satu faktor yang dapat mengganggu keseimbangan aliran
                kas, terutama jika tidak dikelola dengan bijak.  <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
        <!--artikel2-->
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Strategi Pemasaran Digital untuk Meningkatkan Visibilitas dan Penjualan UMKM di Era Digita</p>
            <br>
            <img src="/images/digital.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam era digital yang terus berkembang, UMKM (Usaha Mikro, Kecil, dan Menengah) dihadapkan pada tantangan baru dan peluang baru. Salah satu aspek penting yang perlu 
                dipertimbangkan oleh UMKM adalah strategi pemasaran digital untuk meningkatkan visibilitas dan penjualan produk atau layanan mereka. Pemasaran digital telah menjadi kunci sukses bagi banyak UMKM dalam menghadapi <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
<div class="container mx-auto mb-40">
    <div class="mt-20 mb-10 text-center text-5xl">
        <!-- artikel3 -->
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Membangun Strategi Pemasaran Inovatif untuk Meningkatkan Daya Saing UMKM di Pasar Modern</p>
            <br>
            <img src="/images/pasar.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam menghadapi lingkungan bisnis yang semakin kompetitif, UMKM (Usaha Mikro, Kecil, dan Menengah) perlu mengembangkan strategi pemasaran yang inovatif guna memperkuat posisi mereka di pasar dan meningkatkan penjualan produk atau layanan.
                Salah satu langkah penting adalah memanfaatkan media konvensional secara optimal. UMKM dapat memilih saluran pemasaran yang sesuai dengan karakteristik produk atau layanan mereka, seperti iklan di koran lokal, majalah industri, atau pamflet yang didistribusikan di area strategis.  <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
        <!--artikel4-->
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Membangun Kemitraan yang Berkelanjutan: Kunci Kesuksesan UMKM di Pasar Global</p>
            <br>
            <img src="/images/pasarglobal.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam era digital yang terus berkembang, UMKM (Usaha Mikro, Kecil, dan Menengah) dihadapkan pada tantangan baru dan peluang baru. Salah satu aspek penting yang perlu dipertimbangkan 
                oleh UMKM adalah strategi pemasaran digital untuk meningkatkan visibilitas dan penjualan produk atau layanan mereka. Pemasaran digital telah menjadi kunci sukses bagi banyak UMKM dalam menghadapi persaingan di era digital ini. Dengan memanfaatkan berbagai platform dan teknik pemasaran digital. <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
            <div class="flex items-center mt-4 text-blue-500">
                <br><br><br><br></br></br>
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
<div class="container mx-auto mb-40">
    <div class="mt-20 mb-10 text-center text-5xl">
        <!-- artikel5 -->
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Meningkatkan Produktivitas Kerja di Lingkungan UMKM: Strategi Efektif yang Dapat Diterapkan</p>
            <br>
            <img src="/images/umkm.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam lingkungan Usaha Mikro, Kecil, dan Menengah (UMKM), peningkatan produktivitas kerja menjadi kunci utama untuk mencapai efisiensi dan kesuksesan bisnis. Salah satu strategi yang dapat 
                diterapkan adalah dengan menginvestasikan dalam teknologi yang tepat, seperti perangkat lunak manajemen proyek atau alat kolaborasi online, yang dapat mempermudah koordinasi antar tim dan mempercepat proses kerja. <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
        <!--artikel6-->
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Dinamika Politik Terkait Reformasi Pajak Penghasilan: Implikasi bagi Warga Negara dan Perekonomian</p>
            <br>
            <img src="/images/politik.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam konteks politik, perdebatan tentang pajak penghasilan merupakan topik yang selalu hangat. Reformasi pajak penghasilan, 
                 baik di tingkat nasional maupun global, sering kali menjadi agenda penting bagi para pemimpin politik dan pengambil kebijakan. Implikasi dari kebijakan perpajakan ini tidak
                 hanya memengaruhi warga negara secara langsung, tetapi juga berdampak pada perekonomian secara keseluruhan. <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
<div class="container mx-auto mb-40">
    <div class="mt-20 mb-10 text-center text-5xl">
        <!-- artikel7 -->
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Meningkatkan Efisiensi Operasional UMKM melalui Teknologi Berbasis Cloud</p>
            <br>
            <img src="/images/cloud.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam era digital ini, penggunaan teknologi berbasis cloud telah menjadi salah satu strategi yang efektif dalam meningkatkan efisiensi operasional Usaha Mikro, Kecil, dan Menengah (UMKM). Cloud computing menyediakan akses mudah dan fleksibel ke berbagai layanan IT, mulai 
                 penyimpanan data hingga aplikasi bisnis, tanpa perlu menginvestasikan biaya besar dalam infrastruktur IT. <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">Read more</a></p>
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
        <!--artikel8-->
        <div class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative h-auto" style="height: 700px;">
            <p class="text-xl text-left font-bold text-bold-500">Membangun Kebijakan Inklusif untuk Menyokong Pertumbuhan UMKM dalam Ekonomi Digital</p>
            <br>
            <img src="/images/ekonomi.jpg" alt="Card Image" class="card-image" style="width: 80%; margin-top: 15px; margin-left: 60px;">
            <br>
            <p class="text-sm text-gray-600 mt-2">Dalam konteks globalisasi dan transformasi digital yang terus berlangsung, Usaha Mikro, Kecil, dan Menengah (UMKM) menjadi bagian integral dari perekonomian modern.
                    Namun <a href="/pembelajaran/artikel/detail_artikel" class="text-blue-500">read more</a></p>
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
</div>

@endsection