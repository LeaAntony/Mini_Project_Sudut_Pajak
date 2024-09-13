<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Konsultan | Sudut Pajak</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/css/template/title.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
    
</head>
<body>
    <div class="flex-1 pt-5 mb-5">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="px-4 py-6">
                    <a href="{{ url()->previous() }}" class="btn bg-stone-300">Kembali</a>
                    <div class="flex justify-center">
                        <img src="{{ asset($konsultan->foto_profil_konsultan) }}" class="w-32 h-32 object-cover rounded-full" alt="Pakar">
                    </div>
                    <h2 class="text-center mt-4 text-xl font-semibold">{{ $konsultan->nama_konsultan }}</h2>
                    <p class="text-center text-sm text-gray-600">{{ $konsultan->kategori_konsultan }}</p>
                    <div class="text-gray-700 mt-6">
                        <p class="text-sm"><span class="font-semibold">Bio:</span> {{ $konsultan->bio_konsultan }}</p>
                        <p class="text-sm mt-2"><span class="font-semibold">Email:</span> {{ $konsultan->email_konsultan }}</p>
                        <p class="text-sm mt-2"><span class="font-semibold">Nomor:</span> {{ $konsultan->nomor_konsultan }}</p>
                        <p class="text-sm mt-2"><span class="font-semibold">Jenjang Karir:</span> {{ $konsultan->jenjang_karir_konsultan }}</p>
                        <p class="text-sm mt-2"><span class="font-semibold">Alumnus:</span> {{ $konsultan->alumnus_konsultan }}</p>
                    </div>
                </div>
                <div class="px-4 pb-4">
                    <a href="{{ url('https://wa.me/'.$konsultan->nomor_konsultan) }}" class="w-full btn btn-sm bg-green-400 text-white">Whatsapp</a>
                    <a href="{{ url('https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to='.$konsultan->email_konsultan) }}t" class="w-full btn btn-sm bg-red-400 text-white">Email</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
