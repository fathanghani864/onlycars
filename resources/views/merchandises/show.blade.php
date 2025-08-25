{{-- File: resources/views/merchandises/show.blade.php --}}

@extends('layouts.app')

@section('title', 'Detail Merchandise: ' . $merchandise->name)

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <main class="container mx-auto px-4 py-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-8">
                    <!-- Gambar Produk -->
                    <div class="w-full md:w-1/2 flex-shrink-0">
                        <img src="{{ asset('storage/' . $merchandise->image) }}"
                            alt="Gambar Merchandise {{ $merchandise->name }}" class="w-full h-auto rounded-xl shadow-md">
                    </div>

                    <!-- Detail Produk -->
                    <div class="w-full md:w-1/2 space-y-4">
                        <h1 class="text-4xl font-bold text-gray-900">{{ $merchandise->name }}</h1>
                        <p class="text-2xl font-semibold text-gray-700">
                            Rp{{ number_format($merchandise->price, 0, ',', '.') }}</p>
                        <p class="text-gray-600 leading-relaxed">{{ $merchandise->description }}</p>

                        <div class="flex items-center space-x-2">
                            <span class="text-gray-500 font-semibold">Stok:</span>
                            <span class="text-gray-800">{{ $merchandise->stock }}</span>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-gray-500 font-semibold">Ditambahkan pada:</span>
                            <span class="text-gray-800">{{ $merchandise->created_at->format('d M Y') }}</span>
                        </div>

                        <div class="flex space-x-4 mt-6">
                            <a href="{{ route('merchandises.edit', $merchandise->id) }}"
                                class="px-6 py-3 rounded-xl bg-green-500 text-white font-semibold shadow hover:bg-green-600 transition duration-200">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('merchandises.destroy', $merchandise->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus merchandise ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-6 py-3 rounded-xl bg-red-500 text-white font-semibold shadow hover:bg-red-600 transition duration-200">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </div>

                        <a href="{{ route('merchandises.index') }}" class="inline-block mt-4 text-blue-500 hover:underline">
                            &larr; Kembali ke Daftar Merchandise
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection