<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profile | Admin Panel</title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body>

<div class="admin-layout">


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="admin-sidebar">

        {{-- BRAND --}}
        <div class="admin-brand">

            <div class="admin-brand-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <div>
                <h2>PaisalJohen</h2>
                <span>Admin Panel</span>
            </div>

        </div>


        {{-- NAVIGATION --}}
        <nav class="admin-nav">

            <a
                href="{{ route('admin.dashboard') }}"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>


            <a
                href="{{ route('admin.profile') }}"
                class="admin-nav-link active"
            >
                <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-code"></i>
                <span>Skills</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-folder-open"></i>
                <span>Projects</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-briefcase"></i>
                <span>Experience</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-graduation-cap"></i>
                <span>Education</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-certificate"></i>
                <span>Certificates</span>
            </a>


            <a
                href="#"
                class="admin-nav-link"
            >
                <i class="fa-solid fa-envelope"></i>
                <span>Messages</span>
            </a>

        </nav>


        {{-- LOGOUT --}}
        <div class="admin-sidebar-bottom">

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="admin-logout"
                >
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </button>

            </form>

        </div>

    </aside>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="admin-main">


        {{-- =================================================
             NAVBAR
        ================================================== --}}

        <header class="admin-navbar">

            <div class="admin-navbar-left">

                <div class="admin-navbar-heading">

                    <h1>Edit Profile</h1>

                    <p>
                        Update your portfolio profile information.
                    </p>

                </div>

            </div>


            {{-- ADMIN USER --}}
            <div class="admin-user">

                <div class="admin-user-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="admin-user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Administrator
                    </span>

                </div>

            </div>

        </header>



        {{-- =================================================
             PAGE CONTENT
        ================================================== --}}

        <div class="admin-profile-content">


            {{-- =================================================
                 BACK BUTTON
            ================================================== --}}

            <div class="admin-profile-back">

                <a
                    href="{{ route('admin.profile') }}"
                    class="admin-back-btn"
                >

                    <i class="fa-solid fa-arrow-left"></i>

                    Back to Profile

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
                            Please check the following:
                        </strong>

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            @endif



            {{-- =================================================
                 PROFILE FORM
            ================================================== --}}

            <form
                action="{{ route('admin.profile.update') }}"
                method="POST"
                class="admin-profile-form"
            >

                @csrf

                @method('PUT')



                {{-- =================================================
                     PERSONAL INFORMATION
                ================================================== --}}

                <section class="admin-profile-card">


                    {{-- HEADER --}}

                    <div class="admin-profile-card-header">

                        <div class="admin-profile-card-icon">

                            <i class="fa-solid fa-user"></i>

                        </div>


                        <div>

                            <h2>
                                Personal Information
                            </h2>

                            <p>
                                Basic information displayed on your portfolio.
                            </p>

                        </div>

                    </div>



                    {{-- BODY --}}

                    <div class="admin-profile-card-body">

                        <div class="admin-form-grid">


                            {{-- FULL NAME --}}

                            <div class="admin-form-group">

                                <label for="name">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $profile?->name) }}"
                                    placeholder="Enter your full name"
                                    required
                                >

                            </div>



                            {{-- PROFESSIONAL TITLE --}}

                            <div class="admin-form-group">

                                <label for="title">
                                    Professional Title
                                </label>

                                <input
                                    type="text"
                                    id="title"
                                    name="title"
                                    value="{{ old('title', $profile?->title) }}"
                                    placeholder="e.g. Web Developer"
                                    required
                                >

                            </div>



                            {{-- EMAIL --}}

                            <div class="admin-form-group">

                                <label for="email">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $profile?->email) }}"
                                    placeholder="your@email.com"
                                >

                            </div>



                            {{-- PHONE --}}

                            <div class="admin-form-group">

                                <label for="phone">
                                    Phone
                                </label>

                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone', $profile?->phone) }}"
                                    placeholder="+62 8xxxxxxxxxx"
                                >

                            </div>



                            {{-- LOCATION --}}

                            <div class="admin-form-group admin-form-full">

                                <label for="location">
                                    Location
                                </label>

                                <input
                                    type="text"
                                    id="location"
                                    name="location"
                                    value="{{ old('location', $profile?->location) }}"
                                    placeholder="City, Province, Indonesia"
                                >

                            </div>



                            {{-- BIO --}}

                            <div class="admin-form-group admin-form-full">

                                <label for="bio">
                                    Biography
                                </label>

                                <textarea
                                    id="bio"
                                    name="bio"
                                    rows="6"
                                    placeholder="Write a short description about yourself..."
                                >{{ old('bio', $profile?->bio) }}</textarea>

                            </div>


                        </div>

                    </div>

                </section>



                {{-- =================================================
                     SOCIAL MEDIA
                ================================================== --}}

                <section class="admin-profile-card">


                    {{-- HEADER --}}

                    <div class="admin-profile-card-header">

                        <div class="admin-profile-card-icon">

                            <i class="fa-solid fa-link"></i>

                        </div>


                        <div>

                            <h2>
                                Social Media
                            </h2>

                            <p>
                                Links to your professional social profiles.
                            </p>

                        </div>

                    </div>



                    {{-- BODY --}}

                    <div class="admin-profile-card-body">

                        <div class="admin-form-grid">


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
                                    value="{{ old('github_url', $profile?->github_url) }}"
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
                                    value="{{ old('linkedin_url', $profile?->linkedin_url) }}"
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
                                    value="{{ old('instagram_url', $profile?->instagram_url) }}"
                                    placeholder="https://instagram.com/username"
                                >

                            </div>


                        </div>

                    </div>

                </section>



                {{-- =================================================
                     ACTION BUTTONS
                ================================================== --}}

                <div class="admin-profile-actions">


                    <a
                        href="{{ route('admin.profile') }}"
                        class="admin-cancel-btn"
                    >

                        Cancel

                    </a>


                    <button
                        type="submit"
                        class="admin-save-btn"
                    >

                        <i class="fa-solid fa-floppy-disk"></i>

                        Save Changes

                    </button>


                </div>


            </form>


        </div>

    </main>

</div>


</body>

</html>