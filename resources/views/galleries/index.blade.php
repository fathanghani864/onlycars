{{-- File: resources/views/galleries/index.blade.php --}}

@extends('layout.app')

@section('title', 'Galeri Dokumentasi')

@section('content')
    <div class="min-h-screen flex flex-col bg-white p-10">
        <div class="bg-white shadow-2xl rounded-2xl p-12 max-w-7xl mx-auto w-full">
            <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800 border-b-2 border-gray-200 pb-6">
                📸 Galeri Dokumentasi 🎉
            </h1>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-6 py-4 rounded-lg relative mb-8 shadow-md" role="alert">
                    <span class="block sm:inline font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex justify-between items-center mb-8">
                <p class="text-gray-600">Total Gambar: {{ $galleries->count() }}</p>
                <a href="{{ route('galleries.create') }}"
                    class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-500 transition-all duration-300 transform hover:scale-105">
                    ➕ Tambah Gambar
                </a>
            </div>

            @if($galleries->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($galleries as $gallery)
                        <div
                            class="group relative bg-gray-50 rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                            <a href="{{ Storage::url($gallery->image_dokumentasi) }}" target="_blank" title="{{ $gallery->title }}">
                                <img src="{{ Storage::url($gallery->image_dokumentasi) }}" alt="{{ $gallery->title }}"
                                    class="w-full h-64 object-cover rounded-t-xl transition-all duration-300 group-hover:filter group-hover:brightness-75">
                            </a>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h2 class="text-white text-center text-xl font-bold p-4">{{ $gallery->title }}</h2>
                            </div>
                            <div class="p-4 flex flex-col items-center text-center bg-white">
                                <h2 class="text-lg font-bold text-gray-800 truncate w-full">{{ $gallery->title }}</h2>
                                <div class="mt-4 flex gap-2">
                                    <a href="{{ route('galleries.edit', $gallery->id) }}"
                                        class="px-4 py-2 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-400 transition">✏️
                                        Edit</a>
                                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg font-semibold hover:bg-red-400 transition">🗑️
                                            Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 text-xl mt-12">Belum ada gambar dalam galeri.</p>
            @endif
        </div>
    </div>
@endsection