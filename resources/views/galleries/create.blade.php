{{-- File: resources/views/galleries/create.blade.php --}}

@extends('layout.app')

@section('title', 'Tambah Galeri Baru')

@section('content')
    <div class="min-h-screen flex flex-col bg-gradient-to-br from-purple-900 to-purple-600">

        <main class="flex-grow flex items-center justify-center py-8 px-4">
            <div class="bg-white shadow-2xl rounded-3xl w-full max-w-2xl p-10">

                <!-- Judul -->
                <h1
                    class="text-4xl font-extrabold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-purple-700 via-pink-600 to-blue-600">
                    📸 Tambah Gambar Galeri 🎉
                </h1>

                <!-- Pesan Error Validasi -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form -->
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Judul Gambar -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul Gambar</label>
                        <input type="text" id="title" name="title"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none bg-gray-50"
                            placeholder="Contoh: AutoFest 2025" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar Dokumentasi -->
                    <div>
                        <label for="image_dokumentasi" class="block text-sm font-semibold text-gray-700 mb-2">Gambar
                            Dokumentasi</label>
                        <input type="file" id="image_dokumentasi" name="image_dokumentasi"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50"
                            required>
                        @error('image_dokumentasi')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('galleries.index') }}"
                            class="px-6 py-3 rounded-xl bg-gradient-to-r from-gray-400 to-gray-600 text-white font-semibold shadow hover:scale-105 transition duration-200">
                            ❌ Batal
                        </a>
                        <button type="submit"
                            class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 text-white font-bold shadow-lg hover:scale-105 transition duration-200">
                            🚀 Simpan Gambar
                        </button>
                    </div>
                </form>
            </div>
        </main>

    </div>
@endsection