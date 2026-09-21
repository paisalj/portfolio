<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman profile admin.
     */
    public function index()
    {
        $profile = Profile::first();

        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Menampilkan form edit profile.
     */
    public function edit()
    {
        $profile = Profile::first();

        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Menyimpan atau memperbarui profile.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],

            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'location' => ['nullable', 'string', 'max:255'],

            'github_url' => ['nullable', 'url', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
        ]);

        $profile = Profile::first();

        if (!$profile) {
            $profile = new Profile();
        }

        $profile->fill($validated);
        $profile->save();

        return redirect()
            ->route('admin.profile')
            ->with('success', 'Profile berhasil diperbarui.');
    }
}