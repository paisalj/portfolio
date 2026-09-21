@extends('admin.layouts.app')

@section('admin-title', 'Home')

@section('admin-content')

<div class="admin-home-page">

    {{-- =====================================================
        OUTER CARD
        Membungkus seluruh halaman Home
    ====================================================== --}}
    <div class="admin-home-container">


        {{-- =================================================
            HEADER
        ================================================== --}}
        <div class="admin-page-header">

            <div>

                <span class="admin-page-eyebrow">
                    Portfolio Management
                </span>

                <h1>
                    Home
                </h1>

                <p>
                    Kelola informasi utama yang tampil pada halaman Home portfolio.
                </p>

            </div>


            @if($home)

                <a
                    href="{{ route('admin.home.edit') }}"
                    class="admin-home-edit-btn"
                >
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit Home
                </a>

            @endif

        </div>


        {{-- =================================================
            SUCCESS MESSAGE
        ================================================== --}}
        @if(session('success'))

            <div class="admin-alert admin-alert-success">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        @if($home)


            {{-- =================================================
                CARD UTAMA
                Tampilan Hero
            ================================================== --}}
            <div class="admin-home-card">


                {{-- =============================================
                    CARD HEADER
                ============================================== --}}
                <div class="admin-home-card-header">

                    <div>

                        <span class="admin-card-label">
                            HERO CONTENT
                        </span>

                        <h2>
                            Tampilan Utama
                        </h2>

                    </div>


                    <span class="admin-status-badge">

                        <i class="fa-solid fa-circle"></i>

                        Aktif

                    </span>

                </div>



                {{-- =============================================
                    HERO CONTENT
                ============================================== --}}
                <div class="admin-home-preview-body">


                    {{-- =========================================
                        PROFILE IMAGE
                    ========================================== --}}
                    <div class="admin-home-avatar">

                        @if($home->profile_image)

                            <img
                                src="{{ asset('storage/' . $home->profile_image) }}"
                                alt="{{ $home->name }}"
                            >

                        @else

                            <div class="admin-home-avatar-placeholder">

                                <i class="fa-solid fa-user"></i>

                            </div>

                        @endif

                    </div>



                    {{-- =========================================
                        MAIN INFORMATION
                    ========================================== --}}
                    <div class="admin-home-information">

                        <span class="admin-home-small-title">
                            PERSONAL BRAND
                        </span>


                        <h3>
                            {{ $home->name }}
                        </h3>


                        <div class="admin-home-role">
                            {{ $home->title }}
                        </div>


                        @if($home->hero_description)

                            <p class="admin-home-description">
                                {{ $home->hero_description }}
                            </p>

                        @else

                            <p class="admin-home-empty-text">
                                Belum ada deskripsi Hero.
                            </p>

                        @endif



                        {{-- =====================================
                            SOCIAL LINKS
                        ====================================== --}}
                        <div class="admin-home-socials">


                            @if($home->github_url)

                                <a
                                    href="{{ $home->github_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >

                                    <i class="fa-brands fa-github"></i>

                                    GitHub

                                </a>

                            @endif



                            @if($home->linkedin_url)

                                <a
                                    href="{{ $home->linkedin_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >

                                    <i class="fa-brands fa-linkedin"></i>

                                    LinkedIn

                                </a>

                            @endif



                            @if($home->instagram_url)

                                <a
                                    href="{{ $home->instagram_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >

                                    <i class="fa-brands fa-instagram"></i>

                                    Instagram

                                </a>

                            @endif


                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                CONTENT INFORMATION
            ================================================== --}}
            <div class="admin-home-grid">


                {{-- =================================================
                    CV
                ================================================== --}}
                <div class="admin-home-info-card">

                    <div class="admin-home-info-icon">

                        <i class="fa-solid fa-file-pdf"></i>

                    </div>


                    <div>

                        <span>
                            Curriculum Vitae
                        </span>


                        @if($home->cv_file)

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

                        @else

                            <strong>
                                Belum tersedia
                            </strong>

                            <small>
                                Upload CV melalui Edit Home.
                            </small>

                        @endif

                    </div>

                </div>



                {{-- =================================================
                    GITHUB
                ================================================== --}}
                <div class="admin-home-info-card">

                    <div class="admin-home-info-icon">

                        <i class="fa-brands fa-github"></i>

                    </div>


                    <div>

                        <span>
                            GitHub
                        </span>


                        @if($home->github_url)

                            <strong>
                                Terhubung
                            </strong>


                            <a
                                href="{{ $home->github_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                Buka GitHub

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </a>

                        @else

                            <strong>
                                Belum diatur
                            </strong>

                        @endif

                    </div>

                </div>



                {{-- =================================================
                    LINKEDIN
                ================================================== --}}
                <div class="admin-home-info-card">

                    <div class="admin-home-info-icon">

                        <i class="fa-brands fa-linkedin"></i>

                    </div>


                    <div>

                        <span>
                            LinkedIn
                        </span>


                        @if($home->linkedin_url)

                            <strong>
                                Terhubung
                            </strong>


                            <a
                                href="{{ $home->linkedin_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                Buka LinkedIn

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </a>

                        @else

                            <strong>
                                Belum diatur
                            </strong>

                        @endif

                    </div>

                </div>



                {{-- =================================================
                    INSTAGRAM
                ================================================== --}}
                <div class="admin-home-info-card">

                    <div class="admin-home-info-icon">

                        <i class="fa-brands fa-instagram"></i>

                    </div>


                    <div>

                        <span>
                            Instagram
                        </span>


                        @if($home->instagram_url)

                            <strong>
                                Terhubung
                            </strong>


                            <a
                                href="{{ $home->instagram_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                Buka Instagram

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </a>

                        @else

                            <strong>
                                Belum diatur
                            </strong>

                        @endif

                    </div>

                </div>


            </div>


        @else


            {{-- =================================================
                EMPTY STATE
            ================================================== --}}
            <div class="admin-home-empty">


                <div class="admin-home-empty-icon">

                    <i class="fa-solid fa-house"></i>

                </div>


                <h2>
                    Home belum dibuat
                </h2>


                <p>
                    Belum ada data Home. Tambahkan informasi utama
                    portfolio seperti nama, posisi, deskripsi, foto,
                    CV, dan sosial media.
                </p>


                <a
                    href="{{ route('admin.home.edit') }}"
                    class="admin-home-add-btn"
                >

                    <i class="fa-solid fa-plus"></i>

                    Tambah Home

                </a>


            </div>


        @endif


    </div>

</div>

@endsection