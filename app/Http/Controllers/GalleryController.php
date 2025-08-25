<?php
// File: app/Http/Controllers/GalleryController.php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Tampilkan daftar semua item galeri.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Tampilkan formulir untuk membuat item galeri baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Simpan item galeri baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input, batasan ukuran file dihilangkan
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image_dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        // Simpan gambar dan dapatkan path
        $path = $request->file('image_dokumentasi')->store('galleries', 'public');

        // Buat item galeri baru di database
        Gallery::create([
            'title' => $validated['title'],
            'image_dokumentasi' => $path,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil ditambahkan!');
    }

    /**
     * Tampilkan item galeri yang spesifik.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\View\View
     */
    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }

    /**
     * Tampilkan formulir untuk mengedit item galeri yang ada.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\View\View
     */
    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Perbarui item galeri yang spesifik di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Gallery $gallery)
    {
        // Validasi input, batasan ukuran file dihilangkan
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        // Perbarui data
        $gallery->title = $validated['title'];

        // Jika ada gambar baru diunggah, hapus yang lama dan simpan yang baru
        if ($request->hasFile('image_dokumentasi')) {
            // Hapus gambar lama dari storage
            Storage::disk('public')->delete($gallery->image_dokumentasi);
            // Simpan gambar baru
            $path = $request->file('image_dokumentasi')->store('galleries', 'public');
            $gallery->image_dokumentasi = $path;
        }

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil diperbarui!');
    }

    /**
     * Hapus item galeri yang spesifik dari database.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery)
    {
        // Hapus gambar terkait dari storage
        Storage::disk('public')->delete($gallery->image_dokumentasi);

        // Hapus item dari database
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gambar galeri berhasil dihapus!');
    }
}
