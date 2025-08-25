<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan semua event (Index)
     */
    public function index()
    {
        $events = Event::all(); // ambil semua data dari tabel events
        return view('events.index', compact('events'));
    }


    /**
     * Form untuk tambah event (Create)
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Simpan event baru (Store)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $path = $request->file('cover_image')->store('events', 'public');

        Event::create([
            'title' => $validated['title'],
            'date' => $validated['date'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'cover_image' => $path,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan!');
    }

    /**
     * Form edit event
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update event
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        $event = Event::findOrFail($id);
        $event->update([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil diupdate!');
    }
    /**
     * Menampilkan detail event (Show)
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }


    /**
     * Hapus event
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus!');
    }
}
