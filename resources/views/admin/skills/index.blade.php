@extends('admin.layouts.app')

@section('admin-title', 'Skills')

@section('admin-content')

<div class="admin-skills-page">

    <div class="admin-skills-container">

        {{-- HEADER --}}
        <div class="admin-skills-header">

            <div>
                <span class="admin-skills-eyebrow">
                    Portfolio Management
                </span>

                <h1>
                    Skills
                </h1>

                <p>
                    Kelola kemampuan dan teknologi yang ditampilkan
                    pada portfolio Anda.
                </p>
            </div>

            <a
                href="{{ route('admin.skills.create') }}"
                class="admin-skills-add-btn"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Skill
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="admin-skills-alert admin-skills-alert-success">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-skills-alert admin-skills-alert-error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    <strong>
                        Terjadi kesalahan.
                    </strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        @endif


        @if($skills->count())

            {{-- SKILLS CARD --}}
            <div class="admin-skills-card">

                <div class="admin-skills-card-header">

                    <div>
                        <span class="admin-skills-card-label">
                            SKILL COLLECTION
                        </span>

                        <h2>
                            Daftar Skills
                        </h2>
                    </div>

                    <span class="admin-skills-count">
                        {{ $skills->count() }} Skill
                    </span>

                </div>


                {{-- SKILLS TABLE --}}
                <div class="admin-skills-table-wrapper">

                    <table class="admin-skills-table">

                        <thead>

                            <tr>
                                <th>Skill</th>
                                <th>Kategori</th>
                                <th>Level</th>
                                <th>Icon</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($skills as $skill)

                                <tr>

                                    {{-- NAME --}}
                                    <td>

                                        <div class="admin-skill-name">

                                            <div class="admin-skill-icon">

                                                @if($skill->icon)
                                                    <i class="{{ $skill->icon }}"></i>
                                                @else
                                                    <i class="fa-solid fa-code"></i>
                                                @endif

                                            </div>

                                            <strong>
                                                {{ $skill->name }}
                                            </strong>

                                        </div>

                                    </td>


                                    {{-- CATEGORY --}}
                                    <td>

                                        @if($skill->category)

                                            <span class="admin-skill-category">
                                                {{ $skill->category }}
                                            </span>

                                        @else

                                            <span class="admin-skill-empty">
                                                Belum diatur
                                            </span>

                                        @endif

                                    </td>


                                    {{-- PERCENTAGE --}}
                                    <td>

                                        <div class="admin-skill-level">

                                            <div class="admin-skill-level-top">

                                                <span>
                                                    {{ $skill->percentage }}%
                                                </span>

                                            </div>

                                            <div class="admin-skill-progress">

                                                <div
                                                    class="admin-skill-progress-bar"
                                                    style="width: {{ $skill->percentage }}%;"
                                                ></div>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- ICON --}}
                                    <td>

                                        @if($skill->icon)

                                            <code class="admin-skill-icon-code">
                                                {{ $skill->icon }}
                                            </code>

                                        @else

                                            <span class="admin-skill-empty">
                                                Belum diatur
                                            </span>

                                        @endif

                                    </td>


                                    {{-- ACTION --}}
                                    <td>

                                        <div class="admin-skill-actions">

                                            <a
                                                href="{{ route('admin.skills.edit', $skill) }}"
                                                class="admin-skill-edit-btn"
                                                title="Edit Skill"
                                            >
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>


<form
    action="{{ route('admin.skills.destroy', $skill) }}"
    method="POST"
    class="delete-skill-form"
>
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="admin-skill-delete-btn"
                                                    title="Hapus Skill"
                                                >
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        @else

            {{-- EMPTY STATE --}}
            <div class="admin-skills-empty">

                <div class="admin-skills-empty-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h2>
                    Belum ada Skills
                </h2>

                <p>
                    Belum ada data skill di database.
                    Tambahkan skill pertama Anda untuk ditampilkan
                    pada portfolio.
                </p>

                <a
                    href="{{ route('admin.skills.create') }}"
                    class="admin-skills-empty-btn"
                >
                    <i class="fa-solid fa-plus"></i>
                    Tambah Skill
                </a>

            </div>

        @endif

    </div>

</div>

@endsection