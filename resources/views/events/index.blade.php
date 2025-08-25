{{-- File: resources/views/events/index.blade.php --}}

@extends('layout.app')

@section('title', 'Daftar Event')

@section('content')
    <div class="min-h-screen flex flex-col bg-gray-100 p-10">
        <div class="bg-white shadow-2xl rounded-2xl p-12 max-w-7xl mx-auto w-full">
            <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800 border-b-2 border-gray-200 pb-6">
                🗓️ Daftar Event
            </h1>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-6 py-4 rounded-lg relative mb-8 shadow-md" role="alert">
                    <span class="block sm:inline font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex justify-between items-center mb-8">
                <p class="text-gray-600">Total Event: {{ $events->count() }}</p>
                <a href="{{ route('events.create') }}"
                    class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-500 transition-all duration-300 transform hover:scale-105">
                    ➕ Tambah Event
                </a>
            </div>

            @if($events->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($events as $event)
                        <div
                            class="bg-gray-50 rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                            {{-- Mengatur kontainer gambar dengan tinggi lebih ramping dan meletakkan gambar di tengah --}}
                            <div class="w-full h-100 flex items-center justify-center overflow-hidden rounded-t-xl">
                                {{-- Menggunakan object-cover untuk memastikan gambar menutupi seluruh area bingkai --}}
                                <img src="{{ Storage::url($event->cover_image) }}" alt="{{ $event->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col items-center text-center">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $event->title }}</h2>
                                <p class="text-blue-500 font-semibold text-lg">
                                    {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</p>
                                <p class="text-sm text-gray-500 mt-2">{{ $event->location }}</p>
                                <div class="mt-6 flex gap-3">
                                    <a href="{{ route('events.edit', $event->id) }}"
                                        class="px-5 py-2 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-400 transition">✏️
                                        Edit</a>
                                    <a href="{{ route('events.show', $event->id) }}"
                                        class="px-5 py-2 bg-purple-500 text-white rounded-lg font-semibold hover:bg-purple-400 transition">👁️
                                        Detail</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?');">
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
                <p class="text-center text-gray-500 text-xl mt-12">Belum ada event yang tersedia.</p>
            @endif
        </div>
    </div>
@endsection