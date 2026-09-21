<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Menampilkan semua skills.
     */
    public function index()
    {
        $skills = Skill::orderBy('category')
            ->orderBy('name')
            ->get();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Menampilkan form tambah skill.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Menyimpan skill baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'percentage' => ['required', 'integer', 'min:0', 'max:100'],
            'icon' => ['nullable', 'string', 'max:255'],
        ]);

        Skill::create($validated);

        return redirect()
            ->route('admin.skills')
            ->with('success', 'Skill berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit skill.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Memperbarui skill.
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'percentage' => ['required', 'integer', 'min:0', 'max:100'],
            'icon' => ['nullable', 'string', 'max:255'],
        ]);

        $skill->update($validated);

        return redirect()
            ->route('admin.skills')
            ->with('success', 'Skill berhasil diperbarui.');
    }

    /**
     * Menghapus skill.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()
            ->route('admin.skills')
            ->with('success', 'Skill berhasil dihapus.');
    }
}