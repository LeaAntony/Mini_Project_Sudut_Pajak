    <aside class="w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white shadow-2xl">
        <!-- open sidebar button -->
        <div
            class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white bg-gradient-to-r from-green-400 to-blue-500 absolute top-2 rounded-full h-12">
            <div class="flex items-center space-x-3 group bg-white  pl-10 pr-2 py-1 rounded-full text-white  ">
                <div class="transform ease-in-out duration-300 mr-12">
                    <img src="/images/logo.png" alt="" class="h-16">
                </div>
            </div>
        </div>
        <button onclick="openNav()"
            class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white bg-gradient-to-r from-green-400 to-blue-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </button>
        <!-- MAX SIDEBAR-->
        <div id="sidebar" class="max hidden my-20 flex-col space-y-2 w-full h-[calc(100vh)]">
            <a href="/admin"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-home"></i>
                <div>
                    Dasbor
                </div>
            </a>
            <hr>
            <div class="ml-4 text-stone-400 bg-white text-semibold">
                MENU
            </div>
            <a href="/admin/berita"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-tr-newspaper"></i>
                <div>
                    Manajemen Berita
                </div>
            </a>
            <a href="/admin/usaha"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-briefcase"></i>
                <div>
                    Manajemen Usaha
                </div>
            </a>
            <a href="/admin/pajak"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-tr-tax-alt"></i>
                <div>
                    Manajemen Pajak
                </div>
            </a>
            <a href="/admin/pelathian"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-chart-user"></i>
                <div>
                    Manajemen Pelatihan
                </div>
            </a>
            <a href="/admin/konsultan"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-team-check-alt"></i>
                <div>
                    Manajemen Konsultan
                </div>
            </a>
            <div class="collapse collapse-arrow w-full text-stone-400 shadow-2xl bg-white">
                <input type="checkbox" />
                <div class="collapse-title">
                    <i class="ml-4 mr-2 fi fi-tr-quiz-alt"></i>
                    Manajemen Kuis
                </div>
                <div class="collapse-content">
                    <hr>
                    <a href="/admin/kuis"
                        class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row space-x-3">
                        List Kuis
                    </a>
                    <br>
                    <a href="/admin/kuis/hasil_kuis"
                        class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row space-x-3">
                        List Hasil Kuis
                    </a>
                </div>
            </div>
            <hr>
            <div class="ml-4 text-stone-400 bg-white text-semibold">
                AKUN
            </div>
            <a href="admin/pengaturan_akun"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-user-pen"></i>
                <div>
                    Pengaturan Akun
                </div>
            </a>
            <a href="/masuk"
                class="hover:ml-4 w-full hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi fi-rr-sign-out-alt"></i>
                <div>
                    Keluar
                </div>
            </a>
        </div>
        <!-- MINI SIDEBAR-->
        <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <a href="/admin"
                class="hover:ml-14 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Dasbor <i class="fi fi-rr-home"></i></p>
            </a>
            <hr>
            <div class="ml-4 text-stone-400 bg-white text-semibold">
                MENU
            </div>
            <a href="/admin/berita"
                class="hover:ml-32 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Manajemen Berita <i class="fi fi-tr-newspaper"></i></i></p>
            </a>
            <a href="/admin/usaha"
                class="hover:ml-32 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Manajemen Usaha <i class="fi fi-rr-briefcase"></i></p>
            </a>
            <a href="/admin/pajak"
                class="hover:ml-32 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Manajemen Pajak <i class="fi fi-tr-tax-alt"></i></p>
            </a>
            <a href="/admin/pelatihan"
                class="hover:ml-40 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Manajemen Pelatihan <i class="fi fi-rr-chart-user"></i></i></p>
            </a>
            <a href="/admin/konsultan"
                class="hover:ml-40 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Manajemen Konsultan <i class="fi fi-rr-team-check-alt"></i></p>
            </a>
            <div tabindex="0" role="button"
                class="dropdown dropdown-right btn btn-lg hover:ml-36 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 transform ease-in-out duration-300 flex">
                <div class="dropdown dropdown-right">
                    <p class="font-normal">Manajemen Kuis <i class="fi fi-tr-quiz-alt"></i></p>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/admin/kuis">List Kuis</a></li>
                        <li><a href="/admin/kuis/hasil_kuis">List Hasil Kuis</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="ml-4 text-stone-400 bg-white text-semibold">
                AKUN
            </div>
            <a href="/admin/pengaturan_akun"
                class="hover:ml-32 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Pengaturan Akun <i class="fi fi-rr-user-pen"></i></p>
            </a>
            <a href="/masuk"
                class="hover:ml-12 justify-end pr-5 hover:from-white hover:to-green-400 hover:text-blue-500 bg-gradient-to-r text-stone-400 shadow-2xl bg-white w-full p-2 rounded-full transform ease-in-out duration-300 flex">
                <p>Keluar <i class="fi fi-rr-sign-out-alt"></i></p>
            </a>
        </div>
    </aside>