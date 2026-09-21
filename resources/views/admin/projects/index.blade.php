@extends('admin.layouts.app')

@section('admin-title', 'Projects')

@section('admin-content')

<div class="admin-projects-page">

    <div class="admin-projects-container">

        {{-- HEADER --}}
        <div class="admin-projects-header">

            <div>
                <h1>
                    <i class="fa-solid fa-folder-open"></i>
                    Projects
                </h1>

                <p>
                    Kelola project yang ditampilkan pada portfolio.
                </p>
            </div>

            <a
                href="{{ route('admin.projects.create') }}"
                class="admin-projects-add-btn"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Project
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="admin-projects-alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>

        @endif


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-projects-error">

                <strong>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Terjadi kesalahan:
                </strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif


        {{-- TABLE --}}
        <div class="admin-projects-table-wrapper">

            <table class="admin-projects-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project</th>
                        <th>Skills</th>
                        <th>Periode</th>
                        <th>Featured</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($projects as $project)

                        <tr>

                            {{-- NUMBER --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- PROJECT --}}
                            <td>

                                <div class="project-table-info">

                                    <div class="project-table-image">

                                        @if($project->image)

                                            <img
                                                src="{{ asset('storage/' . $project->image) }}"
                                                alt="{{ $project->title }}"
                                            >

                                        @else

                                            <i class="fa-solid fa-folder"></i>

                                        @endif

                                    </div>

                                    <div>

                                        <strong>
                                            {{ $project->title }}
                                        </strong>

                                        <span>
                                            {{ $project->slug }}
                                        </span>

                                    </div>

                                </div>

                            </td>


                            {{-- SKILLS --}}
                            <td>

                                <div class="project-skills-list">

                                    @forelse($project->skills as $skill)

                                        <span class="project-skill-badge">
                                            {{ $skill->name }}
                                        </span>

                                    @empty

                                        <span class="project-no-data">
                                            Belum ada
                                        </span>

                                    @endforelse

                                </div>

                            </td>


                            {{-- DATE --}}
                            <td>

                                @if($project->start_date || $project->end_date)

                                    <div class="project-date">

                                        @if($project->start_date)
                                            {{ $project->start_date->format('d M Y') }}
                                        @else
                                            -
                                        @endif

                                        <span>—</span>

                                        @if($project->end_date)
                                            {{ $project->end_date->format('d M Y') }}
                                        @else
                                            Sekarang
                                        @endif

                                    </div>

                                @else

                                    <span class="project-no-data">
                                        Belum diatur
                                    </span>

                                @endif

                            </td>


                            {{-- FEATURED --}}
                            <td>

                                @if($project->is_featured)

                                    <span class="project-featured-badge">
                                        <i class="fa-solid fa-star"></i>
                                        Featured
                                    </span>

                                @else

                                    <span class="project-normal-badge">
                                        Normal
                                    </span>

                                @endif

                            </td>


                            {{-- LINKS --}}
                            <td>

                                <div class="project-link-actions">

                                    @if($project->github_url)

                                        <a
                                            href="{{ $project->github_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="project-link github"
                                            title="GitHub"
                                        >
                                            <i class="fa-brands fa-github"></i>
                                        </a>

                                    @endif


                                    @if($project->demo_url)

                                        <a
                                            href="{{ $project->demo_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="project-link demo"
                                            title="Live Demo"
                                        >
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>

                                    @endif


                                    @if(!$project->github_url && !$project->demo_url)

                                        <span class="project-no-data">
                                            -
                                        </span>

                                    @endif

                                </div>

                            </td>


                            {{-- ACTION --}}
                            <td>

                                <div class="project-action-buttons">

                                    <a
                                        href="{{ route('admin.projects.edit', $project) }}"
                                        class="project-action edit"
                                        title="Edit"
                                    >
                                        <i class="fa-solid fa-pen"></i>
                                    </a>


<form
    action="{{ route('admin.projects.destroy', $project) }}"
    method="POST"
    class="delete-project-form"
>
    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="project-action delete"
        title="Hapus"
    >
        <i class="fa-solid fa-trash"></i>
    </button>
</form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="7"
                                class="project-empty"
                            >

                                <i class="fa-solid fa-folder-open"></i>

                                <h3>
                                    Belum ada project
                                </h3>

                                <p>
                                    Tambahkan project pertama untuk portfolio.
                                </p>

                                <a
                                    href="{{ route('admin.projects.create') }}"
                                    class="admin-projects-add-btn"
                                >
                                    <i class="fa-solid fa-plus"></i>
                                    Tambah Project
                                </a>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection