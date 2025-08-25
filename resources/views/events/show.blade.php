@extends('layout.app')

@section('title', 'Detail Event')

@section('content')
    <div
        class="min-h-screen bg-gradient-to-br from-purple-600 via-pink-500 to-red-500 flex items-center justify-center py-12 px-4">
        <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-xl w-full">
            <h1
                class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 mb-6">
                📌 {{ $event->nama }}
            </h1>

            <p class="text-gray-700 mb-3">
                <span class="font-semibold">Tanggal:</span> {{ $event->tanggal }}
            </p>
            <p class="text-gray-700 mb-6">
                <span class="font-semibold">Deskripsi:</span><br> {{ $event->deskripsi }}
            </p>

            <a href="{{ route('events.index') }}"
                class="px-6 py-3 rounded-xl bg-gradient-to-r from-gray-400 to-gray-600 text-white font-semibold shadow hover:scale-105 transition">
                ⬅️ Kembali
            </a>
        </div>
    </div>
@endsection