{{-- File: resources/views/events/create.blade.php --}}

@extends('layout.app')

@section('content')
    <div class="min-h-screen flex flex-col bg-gradient-to-br from-purple-900 to-purple-600">

        <main class="flex-grow flex items-center justify-center py-8 px-4">
            <div class="bg-white shadow-2xl rounded-3xl w-full max-w-2xl p-10">

                <!-- Judul -->
                <h1
                    class="text-4xl font-extrabold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-purple-700 via-pink-600 to-blue-600">
                    🚗 Tambah Event Baru 🎉
                </h1>

                <!-- Pesan Success (jika ada) -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

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
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Judul Event -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul Event</label>
                        <input type="text" id="title" name="title"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none bg-gray-50"
                            placeholder="Contoh: AutoFest 2025" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Event -->
                    <div>
                        <label for="date" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal</label>
                        <input type="date" id="date" name="date"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50"
                            required>
                        @error('date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Lokasi Event -->
                    <div>
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Lokasi Event</label>
                        <input type="text" id="location" name="location"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-gray-50"
                            placeholder="Contoh: Jakarta" required>
                        @error('location')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                        <textarea id="description" name="description" rows="4"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50"
                            placeholder="Tuliskan detail event..." required></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar Cover -->
                    <div>
                        <label for="cover_image" class="block text-sm font-semibold text-gray-700 mb-2">Gambar Cover</label>
                        <input type="file" id="cover_image" name="cover_image"
                            class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-gray-50"
                            required>
                        @error('cover_image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('events.index') }}"
                            class="px-6 py-3 rounded-xl bg-gradient-to-r from-gray-400 to-gray-600 text-white font-semibold shadow hover:scale-105 transition duration-200">
                            ❌ Batal
                        </a>
                        <button type="submit"
                            class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 text-white font-bold shadow-lg hover:scale-105 transition duration-200">
                            🚀 Simpan Event
                        </button>
                    </div>
                </form>
            </div>
        </main>

    </div>
@endsection