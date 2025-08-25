@extends('layout.app')

@section('title', 'Tambah Event')

@section('content')
    <div class="container">
        <h1>Tambah Event</h1>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Judul</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Tanggal</label>
                <input type="date" name="date">
            </div>
            <div>
                <label>Lokasi</label>
                <input type="text" name="location">
            </div>
            <div>
                <label>Deskripsi</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label>Cover</label>
                <input type="file" name="cover_image">
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection