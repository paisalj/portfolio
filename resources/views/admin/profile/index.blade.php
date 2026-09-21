@extends('admin.layouts.app')

@section('admin-title', 'Profile')
@section('admin-subtitle', 'Manage your portfolio profile.')


@section('admin-content')

    @if(session('success'))

        <div class="admin-alert admin-alert-success">

            <i class="fa-solid fa-circle-check"></i>

            <span>
                {{ session('success') }}
            </span>

        </div>

    @endif


    @if($profile)

        {{-- =====================================================
             PROFILE OVERVIEW
        ====================================================== --}}

        <section class="admin-profile-overview">

            <div class="admin-profile-avatar">

                @if($profile->profile_image)

                    <img
                        src="{{ asset('storage/' . $profile->profile_image) }}"
                        alt="{{ $profile->name }}"
                    >

                @else

                    <div class="admin-profile-avatar-placeholder">
                        <i class="fa-solid fa-user"></i>
                    </div>

                @endif

            </div>


            <div class="admin-profile-main-info">

                <span class="admin-profile-label">
                    PORTFOLIO PROFILE
                </span>

                <h2>
                    {{ $profile->name }}
                </h2>

                <p class="admin-profile-title">
                    {{ $profile->title }}
                </p>

                @if($profile->location)

                    <p class="admin-profile-location">

                        <i class="fa-solid fa-location-dot"></i>

                        {{ $profile->location }}

                    </p>

                @endif

            </div>


            <div class="admin-profile-overview-action">

                <a
                    href="{{ route('admin.profile.edit') }}"
                    class="admin-edit-btn"
                >

                    <i class="fa-solid fa-pen"></i>

                    Edit Profile

                </a>

            </div>

        </section>



        {{-- =====================================================
             PERSONAL INFORMATION
        ====================================================== --}}

        <section class="admin-profile-view-card">

            <div class="admin-profile-view-header">

                <h2>
                    Personal Information
                </h2>

                <p>
                    Your information displayed on the portfolio.
                </p>

            </div>


            <div class="admin-profile-info-grid">

                {{-- EMAIL --}}
                <div class="admin-profile-info-item">

                    <span>

                        <i class="fa-solid fa-envelope"></i>

                        Email

                    </span>

                    <strong>
                        {{ $profile->email ?: '-' }}
                    </strong>

                </div>


                {{-- PHONE --}}
                <div class="admin-profile-info-item">

                    <span>

                        <i class="fa-solid fa-phone"></i>

                        Phone

                    </span>

                    <strong>
                        {{ $profile->phone ?: '-' }}
                    </strong>

                </div>


                {{-- LOCATION --}}
                <div class="admin-profile-info-item">

                    <span>

                        <i class="fa-solid fa-location-dot"></i>

                        Location

                    </span>

                    <strong>
                        {{ $profile->location ?: '-' }}
                    </strong>

                </div>


                {{-- PROFESSIONAL TITLE --}}
                <div class="admin-profile-info-item">

                    <span>

                        <i class="fa-solid fa-briefcase"></i>

                        Professional Title

                    </span>

                    <strong>
                        {{ $profile->title ?: '-' }}
                    </strong>

                </div>

            </div>

        </section>



        {{-- =====================================================
             BIOGRAPHY
        ====================================================== --}}

        <section class="admin-profile-view-card">

            <div class="admin-profile-view-header">

                <h2>
                    Biography
                </h2>

                <p>
                    Short description about yourself.
                </p>

            </div>


            <div class="admin-profile-bio">

                @if($profile->bio)

                    <p>
                        {{ $profile->bio }}
                    </p>

                @else

                    <p class="admin-profile-empty">
                        No biography has been added yet.
                    </p>

                @endif

            </div>

        </section>



        {{-- =====================================================
             SOCIAL MEDIA
        ====================================================== --}}

        <section class="admin-profile-view-card">

            <div class="admin-profile-view-header">

                <h2>
                    Social Media
                </h2>

                <p>
                    Your professional social media links.
                </p>

            </div>


            <div class="admin-profile-social-grid">

                {{-- GITHUB --}}
                @if($profile->github_url)

                    <a
                        href="{{ $profile->github_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="admin-social-card"
                    >

                        <i class="fa-brands fa-github"></i>

                        <div>

                            <strong>
                                GitHub
                            </strong>

                            <span>
                                View profile
                            </span>

                        </div>

                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </a>

                @endif


                {{-- LINKEDIN --}}
                @if($profile->linkedin_url)

                    <a
                        href="{{ $profile->linkedin_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="admin-social-card"
                    >

                        <i class="fa-brands fa-linkedin"></i>

                        <div>

                            <strong>
                                LinkedIn
                            </strong>

                            <span>
                                View profile
                            </span>

                        </div>

                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </a>

                @endif


                {{-- INSTAGRAM --}}
                @if($profile->instagram_url)

                    <a
                        href="{{ $profile->instagram_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="admin-social-card"
                    >

                        <i class="fa-brands fa-instagram"></i>

                        <div>

                            <strong>
                                Instagram
                            </strong>

                            <span>
                                View profile
                            </span>

                        </div>

                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </a>

                @endif


                {{-- NO SOCIAL MEDIA --}}
                @if(
                    !$profile->github_url &&
                    !$profile->linkedin_url &&
                    !$profile->instagram_url
                )

                    <p class="admin-profile-empty">

                        No social media links have been added yet.

                    </p>

                @endif

            </div>

        </section>


    @else

        {{-- =====================================================
             EMPTY PROFILE
        ====================================================== --}}

        <section class="admin-profile-empty-card">

            <div class="admin-profile-empty-icon">

                <i class="fa-solid fa-user-plus"></i>

            </div>


            <h2>
                No Profile Yet
            </h2>


            <p>
                Your portfolio profile has not been created yet.
                Add your profile information to get started.
            </p>


            <a
                href="{{ route('admin.profile.edit') }}"
                class="admin-add-profile-btn"
            >

                <i class="fa-solid fa-plus"></i>

                Add Profile

            </a>

        </section>

    @endif

@endsection