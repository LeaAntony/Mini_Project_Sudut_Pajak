@extends('layouts.secondary')

@section('title', 'Pelatihan atau Sertifikasi | Sudut Pajak')
@section('judulBreadcrumbs', 'Pelatihan Atau Sertifikasi')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Pelatihan Atau Sertifikasi</li>

@endsection

@section('content')

<!-- Konten Dimulai -->
<div class="relative">
    <img src="/images/background/about-bg.jpg" class="w-full" alt="about background">
    <div class="absolute top-0 right-0 w-full h-full">
        <div class="container mx-auto px-4 mt-20 mr-44 mb-12">
            @forelse ($pelatihan as $index => $data)
                <div class="grid grid-cols-2 gap-20">
                    <div>
                        <p class="font-medium text-4xl text-sky-800 mt-12">{{ $data->judul_pelatihan }}</p>
                        <p class="text-base text-gray-600 mt-5 text-justify line-clamp-[10]">
                            {{ $data->deskripsi_pelatihan }}
                        </p>
                        <a href="{{ url('/pelatihan_sertifikasi/'.$data->id_pelatihan.'/detail_pelatihan_sertifikasi') }}" class="btn bg-gradient-to-l from-emerald-500 to-sky-500 rounded-full px-11 text-white mt-10 text-base">MULAI SEKARANG</a>
                    </div>
                    <div>
                        <img src="{{ asset($data->gambar_pelatihan) }}" alt="" style="width: 680px; position: absolute; right: 50px;">
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
        <div class="flex items-center justify-end mr-20">
            <button
                class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2 hover:bg-gray-100 hover:text-inherit">
                Previous
            </button>
            <a href="#">
                <button
                    class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 mr-2 hover:bg-gray-100 hover:text-inherit">
                    1
                </button>
            </a>
            <button
                class="rounded-full bg-white border border-gray-300 text-gray-800 px-4 py-2 hover:bg-gray-100 hover:text-inherit">
                Next
            </button>
        </div>
    </div>
</div>
<!-- Konten Berakhir -->

@endsection