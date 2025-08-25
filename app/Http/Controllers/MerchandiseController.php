<?php
// File: app/Http/Controllers/MerchandiseController.php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the merchandise.
     *
     * @return View
     */
    public function index(): View
    {
        // Fetch all merchandise and order by the latest one
        $merchandises = Merchandise::latest()->get();
        // Return the view with the merchandise data
        return view('merchandises.index', compact('merchandises'));
    }

    /**
     * Display the specified merchandise.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id): View
    {
        // Find the merchandise by ID or throw a 404 exception if not found
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandises.show', compact('merchandise'));
    }

    /**
     * Show the form for creating a new merchandise.
     *
     * @return View
     */
    public function create(): View
    {
        return view('merchandises.create');
    }

    /**
     * Store a newly created merchandise in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required',
        ]);

        // Store the uploaded image and get its path
        $path = $request->file('image')->store('merchandises', 'public');

        // Create a new Merchandise record in the database
        Merchandise::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'image' => $path,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified merchandise.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id): View
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandises.edit', compact('merchandise'));
    }

    /**
     * Update the specified merchandise in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
        ]);

        $merchandise = Merchandise::findOrFail($id);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($merchandise->image) {
                Storage::disk('public')->delete($merchandise->image);
            }
            // Store the new image and get its path
            $path = $request->file('image')->store('merchandises', 'public');
        } else {
            // Keep the old image path
            $path = $merchandise->image;
        }

        // Update the merchandise record
        $merchandise->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil diupdate!');
    }

    /**
     * Remove the specified merchandise from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $merchandise = Merchandise::findOrFail($id);

        // Delete the associated image from storage
        if ($merchandise->image) {
            Storage::disk('public')->delete($merchandise->image);
        }

        // Delete the merchandise record from the database
        $merchandise->delete();

        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil dihapus!');
    }
}
