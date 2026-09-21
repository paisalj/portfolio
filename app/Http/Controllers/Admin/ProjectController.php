<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Menampilkan semua project.
     */
    public function index()
    {
        $projects = Project::with('skills')
            ->latest()
            ->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Menampilkan form tambah project.
     */
    public function create()
    {
        $skills = Skill::orderBy('category')
            ->orderBy('name')
            ->get();

        return view('admin.projects.create', compact('skills'));
    }

    /**
     * Menyimpan project baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'demo_url' => ['nullable', 'url', 'max:255'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'is_featured' => ['nullable', 'boolean'],
            'skills' => ['nullable', 'array'],
            'skills.*' => ['exists:skills,id'],
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request
                ->file('image')
                ->store('projects', 'public');
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $project = Project::create($validated);

        $project->skills()->sync($request->input('skills', []));

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit project.
     */
    public function edit(Project $project)
    {
        $project->load('skills');

        $skills = Skill::orderBy('category')
            ->orderBy('name')
            ->get();

        return view('admin.projects.edit', compact('project', 'skills'));
    }

    /**
     * Memperbarui project.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:projects,slug,' . $project->id,
            ],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'demo_url' => ['nullable', 'url', 'max:255'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'is_featured' => ['nullable', 'boolean'],
            'skills' => ['nullable', 'array'],
            'skills.*' => ['exists:skills,id'],
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {

            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('projects', 'public');
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $project->update($validated);

        $project->skills()->sync($request->input('skills', []));

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Menghapus project.
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project berhasil dihapus.');
    }
}