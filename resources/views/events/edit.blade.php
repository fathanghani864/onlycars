{{-- File: resources/views/events/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl">
        <h1 class="text-3xl font-bold mb-6">Edit Event</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Penting untuk metode UPDATE --}}

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Judul Event</label>
                <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}"
                    class="form-input mt-1 block w-full border rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Tanggal</label>
                <input type="date" name="date" id="date" value="{{ old('date', $event->date) }}"
                    class="form-input mt-1 block w-full border rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700">Lokasi</label>
                <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}"
                    class="form-input mt-1 block w-full border rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="form-textarea mt-1 block w-full border rounded-lg p-2"
                    required>{{ old('description', $event->description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="cover_image" class="block text-gray-700">Gambar Cover (Biarkan kosong jika tidak ingin
                    diubah)</label>
                @if ($event->cover_image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($event->cover_image) }}" alt="Current Image"
                            class="w-32 h-32 object-cover rounded-lg">
                    </div>
                @endif
                <input type="file" name="cover_image" id="cover_image" class="form-input mt-1 block w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Perbarui
                    Event</button>
            </div>
        </form>
    </div>
@endsection