<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\educations;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = educations::orderByDesc('start_date')->get();

        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'field_of_study' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
        ]);

        educations::create($validated);

        return redirect()
            ->route('admin.education')
            ->with('success', 'Education berhasil ditambahkan.');
    }

    public function edit(educations $education)
    {
        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, educations $education)
    {
        $validated = $request->validate([
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'field_of_study' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
        ]);

        $education->update($validated);

        return redirect()
            ->route('admin.education')
            ->with('success', 'Education berhasil diperbarui.');
    }

    public function destroy(educations $education)
    {
        $education->delete();

        return redirect()
            ->route('admin.education')
            ->with('success', 'Education berhasil dihapus.');
    }
}