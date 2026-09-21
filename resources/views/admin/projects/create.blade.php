@extends('admin.layouts.app')

@section('admin-title', 'Tambah Project')

@section('admin-content')

<div class="admin-projects-page">

    <div class="admin-projects-container">

        {{-- HEADER --}}
        <div class="admin-project-form-header">

            <div>
                <h1>
                    <i class="fa-solid fa-folder-plus"></i>
                    Tambah Project
                </h1>

                <p>
                    Tambahkan project baru ke portfolio.
                </p>
            </div>

            <a
                href="{{ route('admin.projects') }}"
                class="admin-project-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-projects-error">

                <strong>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Periksa kembali data:
                </strong>

                <ul>

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- FORM --}}
        <form
            action="{{ route('admin.projects.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-project-form"
        >

            @csrf


            {{-- BASIC INFORMATION --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-circle-info"></i>

                    <div>
                        <h2>Informasi Project</h2>
                        <p>Informasi utama project.</p>
                    </div>

                </div>


                <div class="admin-project-form-grid">

                    {{-- TITLE --}}
                    <div class="admin-project-form-group">

                        <label for="title">
                            Nama Project
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Contoh: Portfolio Laravel"
                            required
                        >

                    </div>


                    {{-- SLUG --}}
                    <div class="admin-project-form-group">

                        <label for="slug">
                            Slug
                        </label>

                        <input
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug') }}"
                            placeholder="portfolio-laravel"
                        >

                        <small>
                            Kosongkan jika ingin dibuat otomatis dari nama project.
                        </small>

                    </div>


                    {{-- DESCRIPTION --}}
                    <div class="admin-project-form-group full">

                        <label for="description">
                            Deskripsi
                            <span>*</span>
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="6"
                            placeholder="Jelaskan project yang dibuat..."
                            required
                        >{{ old('description') }}</textarea>

                    </div>

                </div>

            </div>


            {{-- IMAGE --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-image"></i>

                    <div>
                        <h2>Gambar Project</h2>
                        <p>Upload screenshot atau gambar project.</p>
                    </div>

                </div>


                <div class="admin-project-form-group">

                    <label for="image">
                        Gambar Project
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept="image/*"
                    >

                    <small>
                        Format gambar JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                    </small>

                </div>

            </div>


            {{-- LINKS --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-link"></i>

                    <div>
                        <h2>Link Project</h2>
                        <p>Tambahkan link repository dan demo project.</p>
                    </div>

                </div>


                <div class="admin-project-form-grid">

                    {{-- GITHUB --}}
                    <div class="admin-project-form-group">

                        <label for="github_url">
                            GitHub URL
                        </label>

                        <input
                            type="url"
                            id="github_url"
                            name="github_url"
                            value="{{ old('github_url') }}"
                            placeholder="https://github.com/username/project"
                        >

                    </div>


                    {{-- DEMO --}}
                    <div class="admin-project-form-group">

                        <label for="demo_url">
                            Live Demo URL
                        </label>

                        <input
                            type="url"
                            id="demo_url"
                            name="demo_url"
                            value="{{ old('demo_url') }}"
                            placeholder="https://example.com"
                        >

                    </div>

                </div>

            </div>


            {{-- DATE --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-calendar"></i>

                    <div>
                        <h2>Periode Project</h2>
                        <p>Tanggal mulai dan selesai project.</p>
                    </div>

                </div>


                <div class="admin-project-form-grid">

                    <div class="admin-project-form-group">

                        <label for="start_date">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            value="{{ old('start_date') }}"
                        >

                    </div>


                    <div class="admin-project-form-group">

                        <label for="end_date">
                            Tanggal Selesai
                        </label>

                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            value="{{ old('end_date') }}"
                        >

                    </div>

                </div>

            </div>


            {{-- SKILLS --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-code"></i>

                    <div>
                        <h2>Teknologi / Skills</h2>
                        <p>Pilih teknologi yang digunakan pada project.</p>
                    </div>

                </div>


                @if($skills->count())

                    <div class="admin-project-skills-grid">

                        @foreach($skills as $skill)

                            <label class="admin-project-skill-option">

                                <input
                                    type="checkbox"
                                    name="skills[]"
                                    value="{{ $skill->id }}"
                                    {{ in_array($skill->id, old('skills', [])) ? 'checked' : '' }}
                                >

                                <span class="admin-project-skill-check">
                                    <i class="fa-solid fa-check"></i>
                                </span>

                                <span class="admin-project-skill-name">
                                    {{ $skill->name }}
                                </span>

                                @if($skill->category)
                                    <small>
                                        {{ $skill->category }}
                                    </small>
                                @endif

                            </label>

                        @endforeach

                    </div>

                @else

                    <div class="admin-project-no-skills">

                        <i class="fa-solid fa-circle-info"></i>

                        <div>
                            <strong>Belum ada skill.</strong>
                            <p>
                                Tambahkan skill terlebih dahulu melalui menu Skills.
                            </p>
                        </div>

                    </div>

                @endif

            </div>


            {{-- FEATURED --}}
            <div class="admin-project-form-section">

                <div class="admin-project-section-title">

                    <i class="fa-solid fa-star"></i>

                    <div>
                        <h2>Pengaturan</h2>
                        <p>Tentukan apakah project menjadi project unggulan.</p>
                    </div>

                </div>


                <label class="admin-project-featured-option">

                    <input
                        type="checkbox"
                        name="is_featured"
                        value="1"
                        {{ old('is_featured') ? 'checked' : '' }}
                    >

                    <span class="admin-project-featured-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <span>
                        <strong>Jadikan Featured Project</strong>
                        <small>
                            Project akan ditandai sebagai project unggulan.
                        </small>
                    </span>

                </label>

            </div>


            {{-- ACTION --}}
            <div class="admin-project-form-actions">

                <a
                    href="{{ route('admin.projects') }}"
                    class="admin-project-cancel-btn"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="admin-project-save-btn"
                >
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Project
                </button>

            </div>

        </form>

    </div>

</div>

@endsection