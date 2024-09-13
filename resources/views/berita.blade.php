@extends('layouts.secondary')

@section('title', 'Berita | Sudut Pajak')
@section('judulBreadcrumbs', 'Berita')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Berita</li>

@endsection

@section('content')

</br>
</br>


<div class="article-container">
    <div class="grid grid-cols-12 gap-1">
        <!-- berita 1 -->
        @forelse ($berita as $index => $data)
        @if ($index %3 == 0)
            <div class="bg-white ml-10 mr-10 mt-10 col-span-6 shadow-xl rounded-lg">
                <img src="{{ asset($data->gambar_berita) }}" alt="Card Image" class="object-cover w-full h-96 rounded-lg">
                <div class="card-body">
                    <h2 class="card-title text-lg font-medium"><strong>{{ $data->judul_berita }}</strong></h2>
                    <p class="text-sm text-gray-600 mt-2">
                        <div class="line-clamp-4 text-justify">{{ $data->deskripsi_berita }}</div>
                        <a href="{{ url('/berita/'.$data->id_berita.'/detail_berita') }}" class="text-sky-500 font-medium">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="flex items-center mt-4 text-blue-500 justify-end mb-3 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">{{ $data->created_at->toDateString() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        @elseif ($index %2 == 0)
            <div class=" bg-white mx-10 col-span-3 mt-10 shadow-xl rounded-lg">
                <img src="{{ asset($data->gambar_berita) }}" alt="Card Image" class="object-cover w-full h-96 rounded-lg">
                <div class="card-body">
                    <h2 class="card-title text-lg font-medium"><strong>{{ $data->judul_berita }}</strong></h2>
                    <p class="text-sm text-gray-600">
                        <div class="line-clamp-4 text-justify">{{ $data->deskripsi_berita }}</div>
                        <a href="{{ url('/berita/'.$data->id_berita.'/detail_berita') }}" class="text-sky-500 font-medium">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="flex items-center mt-4 text-blue-500 justify-end mb-3 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">{{ $data->created_at->toDateString() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        @elseif ($index %1 == 0)
            <div class=" bg-white mx-10  col-span-3 mt-10 shadow-xl rounded-lg" >
                <img src="{{ asset($data->gambar_berita) }}" alt="Card Image" class="object-cover w-full h-96 rounded-lg">
                <div class="card-body">
                    <h2 class="card-title text-lg font-medium"><strong>{{ $data->judul_berita }}</strong></h2>
                    <p class="text-sm text-gray-600">
                        <div class="line-clamp-4 text-justify">{{ $data->deskripsi_berita }}</div>
                        <a href="{{ url('/berita/'.$data->id_berita.'/detail_berita') }}" class="text-sky-500 font-medium">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="flex items-center mt-4 text-blue-500 justify-end mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                    </svg>
                    <span class="mr-1 text-sm">{{ $data->created_at->toDateString() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    </svg>
                    <span class="text-sm">Admin</span>
                </div>
            </div>
        @endif
        @empty
            <div class="col-span-3">Tidak ada Berita yang tersedia</div>
        @endforelse
    </div>
</div>

<div class="mx-10 my-20">
    {{ $berita->links() }}
</div>

@endsection