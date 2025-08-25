{{-- File: resources/views/merchandises/create.blade.php --}}

@extends('layout.app')

@section('title', 'Tambah Merchandise Baru')

@section('content')
    <div class="min-h-screen flex flex-col bg-gray-900">
        <main class="flex-grow flex items-center justify-center py-12 px-4">
            <div
                class="bg-white shadow-2xl rounded-3xl w-full max-w-2xl p-12 transform transition-transform duration-300 hover:scale-[1.01] hover:shadow-3xl">

                <!-- Judul Halaman -->
                <div class="text-center mb-10">
                    <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">
                        🛍️ Tambah Merchandise Baru
                    </h1>
                    <p class="text-gray-500 mt-2 text-lg">Kelola koleksi merchandise Anda dengan mudah.</p>
                </div>

                <!-- Form -->
                <form action="{{ route('merchandises.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-8">
                    @csrf

                    <!-- Nama Merchandise -->
                    <div>
                        <label for="name" class="block text-base font-semibold text-gray-700 mb-3">Nama Produk</label>
                        <input type="text" id="name" name="name"
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-4 focus:ring-blue-200 focus:border-blue-500 focus:outline-none bg-gray-50 transition-all duration-300"
                            placeholder="Contoh: Kemeja Polo Autentik" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div>
                        <label for="description" class="block text-base font-semibold text-gray-700 mb-3">Deskripsi
                            Produk</label>
                        <textarea id="description" name="description" rows="5"
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-4 focus:ring-blue-200 focus:border-blue-500 focus:outline-none bg-gray-50 transition-all duration-300"
                            placeholder="Tuliskan deskripsi produk yang detail dan menarik."
                            required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Harga -->
                    <div>
                        <label for="price" class="block text-base font-semibold text-gray-700 mb-3">Harga (Rp)</label>
                        <input type="number" id="price" name="price"
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-4 focus:ring-blue-200 focus:border-blue-500 focus:outline-none bg-gray-50 transition-all duration-300"
                            value="{{ old('price') }}" required>
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Stok -->
                    <div>
                        <label for="stock" class="block text-base font-semibold text-gray-700 mb-3">Stok</label>
                        <input type="number" id="stock" name="stock"
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-4 focus:ring-blue-200 focus:border-blue-500 focus:outline-none bg-gray-50 transition-all duration-300"
                            value="{{ old('stock') }}" required>
                        @error('stock')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar Produk -->
                    <div>
                        <label for="image" class="block text-base font-semibold text-gray-700 mb-3">Gambar Produk</label>
                        <input type="file" id="image" name="image"
                            class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-4 focus:ring-blue-200 focus:border-blue-500 focus:outline-none bg-gray-50 transition-all duration-300"
                            required>
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-between items-center mt-8">
                        <a href="{{ route('merchandises.index') }}"
                            class="px-8 py-4 rounded-xl bg-gray-300 text-gray-800 font-bold shadow-lg hover:bg-gray-400 transition-all duration-300 transform hover:scale-105">
                            ❌ Batal
                        </a>
                        <button type="submit"
                            class="px-8 py-4 rounded-xl bg-gray-800 text-white font-bold shadow-lg hover:bg-gray-900 transition-all duration-300 transform hover:scale-105">
                            🚀 Simpan Merchandise
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection