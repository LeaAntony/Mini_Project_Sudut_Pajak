    <div class="fixed w-full z-30 flex bg-gradient-to-r from-green-400 to-blue-500 p-2 items-center justify-center h-16 px-10">
        <div class="logo ml-12 transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            <div class="text-white font-bold text-xl ">
                <span id="jam">00</span>
                <span>:</span>
                <span id="menit">00</span>
                <span>:</span>
                <span id="detik">00</span>
            </div>
        </div>
        <!-- SPACER -->
        <div class="grow h-full flex items-center justify-center"></div>
        <div class="flex-none h-full text-center flex items-center justify-center">

            <div class="flex space-x-3 items-center px-3">
                <div class="flex-none flex justify-center">
                    <div class="w-8 h-8 flex ">
                        <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="profile"
                            class="shadow rounded-full object-cover" />
                    </div>
                </div>

                <div class="hidden md:block text-sm md:text-md text-black">{{ $user->name }}</div>
            </div>

        </div>
    </div>