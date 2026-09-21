<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();

        return view('admin.home.index', compact('home'));
    }

    public function edit()
    {
        $home = Home::first();

        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'title' => ['required', 'string', 'max:255'],

            'hero_description' => ['nullable', 'string'],

            'profile_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'cv_file' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:5120',
            ],

            'github_url' => [
                'nullable',
                'url',
                'max:255',
            ],

            'linkedin_url' => [
                'nullable',
                'url',
                'max:255',
            ],

            'instagram_url' => [
                'nullable',
                'url',
                'max:255',
            ],
        ]);

        $home = Home::first();

        if (!$home) {
            $home = new Home();
        }

        /*
        |--------------------------------------------------------------------------
        | Upload Profile Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('profile_image')) {

            $file = $request->file('profile_image');

            $fileName = 'profile-' . time() . '.' .
                $file->getClientOriginalExtension();

            $file->storeAs(
                'home',
                $fileName,
                'public'
            );

            $validated['profile_image'] = 'home/' . $fileName;
        }


        /*
        |--------------------------------------------------------------------------
        | Upload CV
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('cv_file')) {

            $file = $request->file('cv_file');

            $fileName = 'cv-' . time() . '.' .
                $file->getClientOriginalExtension();

            $file->storeAs(
                'cv',
                $fileName,
                'public'
            );

            $validated['cv_file'] = 'cv/' . $fileName;
        }


        $home->fill($validated);

        $home->save();


        return redirect()
            ->route('admin.home')
            ->with('success', 'Home berhasil diperbarui.');
    }
}