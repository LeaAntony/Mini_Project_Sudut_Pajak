    <nav class="navbar bg-base-100 shadow-md mx-auto fixed z-50">
        <div class="navbar-start">
            <div class="ml-36">
                <img src="/images/logo.png" alt="" class="object-cover h-24 w-auto">
            </div>
        </div>
        <div class="navbar-center hidden lg:flex md:flex mr-36">
            <ul class="menu menu-horizontal px-1 text-base text-stone-400 font-medium">
                <li><a href="/" id="navBeranda">BERANDA</a></li>
                <li><a href="/layanan" id="navLayanan">LAYANAN</a></li>
                <li><a href="/kalkulator" id="navKalkulator">KALKULATOR</a></li>
                <li><a href="https://taxcenter-polibatam.id">APLIKASI PAJAK</a></li>
                <li>
                    <details>
                        <summary id="navPeraturan">PERATURAN</summary>
                        <ul class="p-2 shadow-md z-10 w-[22rem]">
                            <li><a href="/peraturan_pajak_pusat" id="navPeraturanPusat">Peraturan Pajak Pusat</a></li>
                            <li><a href="/peraturan_pajak_daerah" id="navPeraturanDaerah">Peraturan Pajak Daerah Kota Batam</a></li>
                        </ul>
                    </details>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="/profil" id="navProfil">PROFIL</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">MASUK</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">DAFTAR</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>