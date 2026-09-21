<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman About Admin.
     */
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    /**
     * Menampilkan halaman Edit About.
     */
    public function edit()
    {
        $about = About::first();

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Menyimpan / memperbarui data About.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'description' => ['nullable', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'focus' => ['nullable', 'string', 'max:255'],
            'framework' => ['nullable', 'string', 'max:255'],
            'database' => ['nullable', 'string', 'max:255'],
            'values' => ['nullable', 'string'],
        ]);

        $about = About::first();

        if (!$about) {
            $about = new About();
        }

        $about->fill($validated);
        $about->save();

        return redirect()
            ->route('admin.about')
            ->with('success', 'Informasi About berhasil diperbarui.');
    }
}