{{-- File: resources/views/merchandises/index.blade.php --}}

@extends('layout.app')

@section('title', 'Daftar Merchandise')

@section('content')
    <div class="min-h-screen flex flex-col bg-white p-10">
        <div class="bg-white shadow-2xl rounded-2xl p-12 max-w-7xl mx-auto w-full">
            <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800 border-b-2 border-gray-200 pb-6">
                📦 Koleksi Merchandise
            </h1>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-6 py-4 rounded-lg relative mb-8 shadow-md" role="alert">
                    <span class="block sm:inline font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex justify-between items-center mb-8">
                <p class="text-gray-600">Total Produk: {{ $merchandises->count() }}</p>
                <a href="{{ route('merchandises.create') }}"
                    class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-500 transition-all duration-300 transform hover:scale-105">
                    ➕ Tambah Produk
                </a>
            </div>

            @if($merchandises->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($merchandises as $merchandise)
                        <div
                            class="bg-gray-50 rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="w-full h-80 flex items-center justify-center p-4">
                                <img src="{{ Storage::url($merchandise->image) }}" alt="{{ $merchandise->name }}"
                                    class="max-w-full max-h-full object-contain">
                            </div>
                            <div class="p-6 flex flex-col items-center text-center">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $merchandise->name }}</h2>
                                <p class="text-blue-500 font-semibold text-lg">
                                    Rp{{ number_format($merchandise->price, 0, ',', '.') }}</p>
                                <p class="text-sm text-gray-500 mt-2">Stok: {{ $merchandise->stock }}</p>
                                <div class="mt-6 flex gap-3">
                                    <a href="{{ route('merchandises.edit', $merchandise->id) }}"
                                        class="px-5 py-2 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-400 transition">✏️
                                        Edit</a>
                                    <a href="{{ route('merchandises.show', $merchandise->id) }}"
                                        class="px-5 py-2 bg-purple-500 text-white rounded-lg font-semibold hover:bg-purple-400 transition">👁️
                                        Detail</a>
                                    <form action="{{ route('merchandises.destroy', $merchandise->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-5 py-2 bg-red-500 text-white rounded-lg font-semibold hover:bg-red-400 transition">🗑️
                                            Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 text-xl mt-12">Belum ada merchandise yang tersedia.</p>
            @endif
        </div>
    </div>
@endsection