@extends('admin.layouts.app')

@section('admin-title', 'Edit Beranda')

@section('admin-content')

<div class="admin-home-edit-page">

    {{-- =====================================================
         OUTER CARD
         SEMUA KONTEN EDIT MASUK KE DALAM CARD BESAR
    ====================================================== --}}
    <div class="admin-home-edit-container">

        {{-- =================================================
             PAGE HEADER
        ================================================== --}}
        <div class="admin-page-header">

            <div>
                <span class="admin-page-eyebrow">
                    Manajemen Portfolio
                </span>

                <h1>
                    Edit Beranda
                </h1>

                <p>
                    Kelola informasi utama yang ditampilkan pada halaman Beranda portfolio.
                </p>
            </div>

            <a
                href="{{ route('admin.home') }}"
                class="admin-home-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- =================================================
             VALIDATION ERROR
        ================================================== --}}
        @if($errors->any())

            <div class="admin-alert admin-alert-error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>

                    <strong>
                        Terjadi kesalahan:
                    </strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

        @endif


        {{-- =================================================
             FORM
        ================================================== --}}
        <form
            action="{{ route('admin.home.update') }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-home-edit-form"
        >

            @csrf
            @method('PUT')


            {{-- =================================================
                 INFORMASI UTAMA
            ================================================== --}}
            <div class="admin-home-edit-card">

                <div class="admin-home-edit-card-header">

                    <div class="admin-home-edit-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div>
                        <h2>
                            Informasi Utama
                        </h2>

                        <p>
                            Informasi yang akan ditampilkan pada bagian Hero.
                        </p>
                    </div>

                </div>


                <div class="admin-home-form-grid">

                    {{-- NAMA --}}
                    <div class="admin-form-group">

                        <label for="name">
                            <i class="fa-solid fa-user"></i>
                            Nama
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $home?->name) }}"
                            placeholder="Contoh: Paisal Johen"
                            required
                        >

                    </div>


                    {{-- PROFESI --}}
                    <div class="admin-form-group">

                        <label for="title">
                            <i class="fa-solid fa-briefcase"></i>
                            Departemen/Profesi
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $home?->title) }}"
                            placeholder="Contoh: Web Developer"
                            required
                        >

                    </div>

                </div>


                {{-- DESKRIPSI --}}
                <div class="admin-form-group">

                    <label for="hero_description">
                        <i class="fa-solid fa-align-left"></i>
                        Deskripsi Hero
                    </label>

                    <textarea
                        id="hero_description"
                        name="hero_description"
                        rows="5"
                        placeholder="Tulis deskripsi singkat tentang diri Anda..."
                    >{{ old('hero_description', $home?->hero_description) }}</textarea>

                    <small>
                        Gunakan deskripsi singkat yang menjelaskan profil profesional Anda.
                    </small>

                </div>

            </div>


            {{-- =================================================
                 FOTO & CV
            ================================================== --}}
            <div class="admin-home-edit-card">

                <div class="admin-home-edit-card-header">

                    <div class="admin-home-edit-icon">
                        <i class="fa-solid fa-images"></i>
                    </div>

                    <div>
                        <h2>
                            Foto & CV
                        </h2>

                        <p>
                            Kelola foto profil dan CV yang digunakan pada portfolio.
                        </p>
                    </div>

                </div>


                <div class="admin-home-media-grid">

                    {{-- FOTO PROFIL --}}
                    <div class="admin-media-box">

                        <label for="profile_image">
                            <i class="fa-solid fa-image"></i>
                            Foto Profil
                        </label>


                        <div class="admin-current-image">

                            @if($home?->profile_image)

                                <img
                                    src="{{ asset('storage/' . $home->profile_image) }}"
                                    alt="{{ $home->name }}"
                                >

                            @else

                                <div class="admin-no-image">

                                    <i class="fa-solid fa-user"></i>

                                    <span>
                                        Belum ada foto
                                    </span>

                                </div>

                            @endif

                        </div>


                        <input
                            type="file"
                            id="profile_image"
                            name="profile_image"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <small>
                            JPG, JPEG, PNG atau WEBP. Maksimal 2 MB.
                        </small>

                    </div>


                    {{-- CV --}}
                    <div class="admin-media-box">

                        <label for="cv_file">
                            <i class="fa-solid fa-file-pdf"></i>
                            Curriculum Vitae
                        </label>


                        <div class="admin-current-cv">

                            @if($home?->cv_file)

                                <div class="admin-cv-file">

                                    <i class="fa-solid fa-file-pdf"></i>

                                    <div>

                                        <strong>
                                            CV tersedia
                                        </strong>

                                        <a
                                            href="{{ asset('storage/' . $home->cv_file) }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            Lihat CV
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>

                                    </div>

                                </div>

                            @else

                                <div class="admin-no-cv">

                                    <i class="fa-solid fa-file-circle-xmark"></i>

                                    <span>
                                        Belum ada CV
                                    </span>

                                </div>

                            @endif

                        </div>


                        <input
                            type="file"
                            id="cv_file"
                            name="cv_file"
                            accept=".pdf"
                        >

                        <small>
                            Format PDF. Maksimal 5 MB.
                        </small>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SOCIAL MEDIA
            ================================================== --}}
            <div class="admin-home-edit-card">

                <div class="admin-home-edit-card-header">

                    <div class="admin-home-edit-icon">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>

                    <div>
                        <h2>
                            Social Media
                        </h2>

                        <p>
                            Masukkan link akun profesional Anda.
                        </p>
                    </div>

                </div>


                <div class="admin-form-grid-3">

                    {{-- GITHUB --}}
                    <div class="admin-form-group">

                        <label for="github_url">
                            <i class="fa-brands fa-github"></i>
                            GitHub
                        </label>

                        <input
                            type="url"
                            id="github_url"
                            name="github_url"
                            value="{{ old('github_url', $home?->github_url) }}"
                            placeholder="https://github.com/username"
                        >

                    </div>


                    {{-- LINKEDIN --}}
                    <div class="admin-form-group">

                        <label for="linkedin_url">
                            <i class="fa-brands fa-linkedin"></i>
                            LinkedIn
                        </label>

                        <input
                            type="url"
                            id="linkedin_url"
                            name="linkedin_url"
                            value="{{ old('linkedin_url', $home?->linkedin_url) }}"
                            placeholder="https://linkedin.com/in/username"
                        >

                    </div>


                    {{-- INSTAGRAM --}}
                    <div class="admin-form-group">

                        <label for="instagram_url">
                            <i class="fa-brands fa-instagram"></i>
                            Instagram
                        </label>

                        <input
                            type="url"
                            id="instagram_url"
                            name="instagram_url"
                            value="{{ old('instagram_url', $home?->instagram_url) }}"
                            placeholder="https://instagram.com/username"
                        >

                    </div>

                </div>

            </div>


            {{-- =================================================
                 ACTIONS
            ================================================== --}}
            <div class="admin-home-form-actions">

                <a
                    href="{{ route('admin.home') }}"
                    class="admin-home-cancel-btn"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="admin-home-save-btn"
                >
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection