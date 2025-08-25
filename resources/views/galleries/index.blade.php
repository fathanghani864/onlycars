{{-- File: resources/views/galleries/index.blade.php --}}

@extends('layout.app')

@section('title', 'Galeri Dokumentasi')

@section('content')
    <div class="min-h-screen flex flex-col bg-gradient-to-br from-purple-600 via-pink-500 to-red-500 p-10">
        <div class="bg-white shadow-2xl rounded-3xl p-8 max-w-7xl mx-auto w-full">
            <h1
                class="text-3xl font-extrabold mb-6 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">
                📸 Galeri Dokumentasi 🎉
            </h1>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex justify-end mb-6">
                <a href="{{ route('galleries.create') }}"
                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-500 text-white font-semibold shadow-lg hover:scale-105 transition">
                    ➕ Tambah Gambar
                </a>
            </div>

            @if($galleries->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($galleries as $gallery)
                        <div
                            class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                            <a href="{{ Storage::url($gallery->image_dokumentasi) }}" target="_blank" title="{{ $gallery->title }}">
                                <img src="{{ Storage::url($gallery->image_dokumentasi) }}" alt="{{ $gallery->title }}"
                                    class="w-full h-96 object-cover rounded-t-xl">
                            </a>
                            <div class="p-4 flex flex-col items-center">
                                <h2 class="text-xl font-bold text-gray-800 text-center">{{ $gallery->title }}</h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-600 text-xl mt-8">Belum ada gambar dalam galeri.</p>
            @endif
        </div>
    </div>
@endsection