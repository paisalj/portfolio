@extends('admin.layouts.app')

@section('admin-title', 'About')

@section('admin-content')

<div class="admin-about-page">

    {{-- OUTER CARD --}}
    <div class="admin-about-container">

        {{-- PAGE HEADER --}}
        <div class="admin-about-header">

            <div>
                <span class="admin-about-eyebrow">
                    Portfolio Management
                </span>

                <h1>
                    About
                </h1>

                <p>
                    Kelola informasi tentang diri dan profil profesional
                    yang tampil pada halaman About portfolio.
                </p>
            </div>

            @if($about)

                <a
                    href="{{ route('admin.about.edit') }}"
                    class="admin-about-edit-btn"
                >
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit About
                </a>

            @endif

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="admin-about-alert">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        @if($about)

            {{-- ABOUT CONTENT CARD --}}
            <div class="admin-about-content-card">

                {{-- CARD HEADER --}}
                <div class="admin-about-card-header">

                    <div>

                        <span class="admin-about-card-label">
                            ABOUT CONTENT
                        </span>

                        <h2>
                            Tentang Saya
                        </h2>

                    </div>

                    <span class="admin-about-status">
                        <i class="fa-solid fa-circle"></i>
                        Aktif
                    </span>

                </div>


                {{-- DESCRIPTION --}}
                <div class="admin-about-description-section">

                    <span class="admin-about-section-label">
                        DESKRIPSI
                    </span>

                    @if($about->description)

                        <p>
                            {{ $about->description }}
                        </p>

                    @else

                        <p class="admin-about-empty-text">
                            Belum ada deskripsi About.
                        </p>

                    @endif

                </div>


                {{-- INFORMATION GRID --}}
                <div class="admin-about-information-grid">

                    {{-- LOCATION --}}
                    <div class="admin-about-info-item">

                        <div class="admin-about-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <span>
                                Lokasi
                            </span>

                            @if($about->location)

                                <strong>
                                    {{ $about->location }}
                                </strong>

                            @else

                                <strong class="admin-about-not-set">
                                    Belum diatur
                                </strong>

                            @endif
                        </div>

                    </div>


                    {{-- FOCUS --}}
                    <div class="admin-about-info-item">

                        <div class="admin-about-info-icon">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>

                        <div>
                            <span>
                                Fokus
                            </span>

                            @if($about->focus)

                                <strong>
                                    {{ $about->focus }}
                                </strong>

                            @else

                                <strong class="admin-about-not-set">
                                    Belum diatur
                                </strong>

                            @endif
                        </div>

                    </div>


                    {{-- FRAMEWORK --}}
                    <div class="admin-about-info-item">

                        <div class="admin-about-info-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>
                            <span>
                                Framework
                            </span>

                            @if($about->framework)

                                <strong>
                                    {{ $about->framework }}
                                </strong>

                            @else

                                <strong class="admin-about-not-set">
                                    Belum diatur
                                </strong>

                            @endif
                        </div>

                    </div>


                    {{-- DATABASE --}}
                    <div class="admin-about-info-item">

                        <div class="admin-about-info-icon">
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <div>
                            <span>
                                Database
                            </span>

                            @if($about->database)

                                <strong>
                                    {{ $about->database }}
                                </strong>

                            @else

                                <strong class="admin-about-not-set">
                                    Belum diatur
                                </strong>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- VALUES --}}
                <div class="admin-about-values-section">

                    <div class="admin-about-values-header">

                        <div class="admin-about-info-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div>

                            <span class="admin-about-section-label">
                                NILAI & KEUNGGULAN
                            </span>

                            <h3>
                                Profesionalitas
                            </h3>

                        </div>

                    </div>


                    @if($about->values)

                        <p>
                            {{ $about->values }}
                        </p>

                    @else

                        <p class="admin-about-empty-text">
                            Belum ada informasi nilai atau keunggulan.
                        </p>

                    @endif

                </div>

            </div>


        @else

            {{-- EMPTY STATE --}}
            <div class="admin-about-empty">

                <div class="admin-about-empty-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <h2>
                    About belum dibuat
                </h2>

                <p>
                    Belum ada informasi About. Tambahkan deskripsi,
                    lokasi, fokus, framework, database, dan nilai
                    profesional Anda.
                </p>

                <a
                    href="{{ route('admin.about.edit') }}"
                    class="admin-about-add-btn"
                >
                    <i class="fa-solid fa-plus"></i>
                    Tambah About
                </a>

            </div>

        @endif

    </div>

</div>

@endsection