<section id="home" class="hero-section">

    {{-- =====================================================
        ANIMATED BACKGROUND
    ====================================================== --}}

    <div class="hero-bg-grid"></div>

    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="hero-orb hero-orb-3"></div>

    <div class="hero-particle hero-particle-1"></div>
    <div class="hero-particle hero-particle-2"></div>
    <div class="hero-particle hero-particle-3"></div>
    <div class="hero-particle hero-particle-4"></div>
    <div class="hero-particle hero-particle-5"></div>

    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>


    <div class="container position-relative hero-container">

        <div class="row align-items-center hero-content">

            {{-- =====================================================
                HERO LEFT
            ====================================================== --}}

            <div class="col-lg-6 hero-left">

                {{-- SMALL LABEL --}}
                <div class="hero-badge">
                    <span></span>
                    HELLO, I'M
                </div>

{{-- NAME --}}
<h1 class="hero-title">
    {{ $home?->name ?? 'Paisal Johen' }}
</h1>


{{-- =====================================================
    MOBILE PROFILE
    FOTO KHUSUS UNTUK HP
====================================================== --}}

@if($home?->profile_image)

    <div class="hero-mobile-profile">

        {{-- GLOW --}}
        <div class="hero-profile-glow"></div>

        {{-- RING --}}
        <div class="hero-profile-ring"></div>

        {{-- FOTO --}}
        <div class="hero-profile-card">

            <div class="hero-profile-image-wrapper">

                <img
                    src="{{ asset($home->profile_image) }}"
                    alt="{{ $home?->name ?? 'Profile Photo' }}"
                    class="hero-profile-image"
                >

            </div>

        </div>

        {{-- TECHNOLOGY BADGES --}}

        <div class="hero-tech-badge hero-tech-laravel">
            <i class="fa-brands fa-laravel"></i>
            <span>Laravel</span>
        </div>

        <div class="hero-tech-badge hero-tech-php">
            <i class="fa-brands fa-php"></i>
            <span>PHP</span>
        </div>

        <div class="hero-tech-badge hero-tech-mysql">
            <i class="fa-solid fa-database"></i>
            <span>MySQL</span>
        </div>

        <div class="hero-tech-badge hero-tech-bootstrap">
            <i class="fa-brands fa-bootstrap"></i>
            <span>Bootstrap</span>
        </div>

    </div>

@else

    <div class="hero-mobile-profile">

        {{-- GLOW --}}
        <div class="hero-profile-glow"></div>

        {{-- RING --}}
        <div class="hero-profile-ring"></div>

        {{-- PLACEHOLDER --}}
        <div class="hero-profile-card">

            <div class="hero-profile-image-wrapper hero-profile-placeholder">

                <i class="fa-solid fa-user"></i>

            </div>

        </div>

    </div>

@endif

{{-- ROLE --}}
<div class="hero-role">
    {{ $home?->title ?? 'Web Developer' }}

    <span class="typing-cursor">|</span>
</div>

                {{-- DESCRIPTION --}}
                <p class="hero-description">

                    {{ $home?->hero_description ?? 'Saya adalah Web Developer yang memiliki minat dalam pengembangan aplikasi web menggunakan Laravel, PHP, MySQL, dan Bootstrap.' }}

                </p>


                {{-- =================================================
                    BUTTONS
                ================================================== --}}

                <div class="hero-buttons">

                    <a
                        href="#projects"
                        class="btn hero-btn-primary"
                    >
                        <i class="fa-solid fa-briefcase"></i>
                        View Projects
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>


                    <a
                        href="#contact"
                        class="btn hero-btn-outline"
                    >
                        <i class="fa-regular fa-envelope"></i>
                        Contact Me
                    </a>


                    @if($home?->cv_file)

                        <a
                            href="{{ asset($home->cv_file) }}"
                            class="btn hero-btn-cv"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-solid fa-file-arrow-down"></i>
                            Download CV
                        </a>

                    @endif

                </div>


                {{-- =================================================
                    SOCIAL MEDIA
                ================================================== --}}

                <div class="hero-social">

                    @if($home?->github_url)

                        <a
                            href="{{ $home->github_url }}"
                            class="social-btn"
                            title="GitHub"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-github"></i>
                        </a>

                    @endif


                    @if($home?->linkedin_url)

                        <a
                            href="{{ $home->linkedin_url }}"
                            class="social-btn"
                            title="LinkedIn"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                    @endif


                    @if($home?->instagram_url)

                        <a
                            href="{{ $home->instagram_url }}"
                            class="social-btn"
                            title="Instagram"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                HERO RIGHT / PROFILE
            ====================================================== --}}

            <div class="col-lg-6 hero-right">

                <div class="hero-profile-visual">

                    {{-- GOLDEN GLOW --}}
                    <div class="hero-profile-glow"></div>


                    {{-- CIRCLE RING --}}
                    <div class="hero-profile-ring"></div>


                    {{-- PROFILE IMAGE --}}
                    @if($home?->profile_image)

                        <div class="hero-profile-card">

                            <div class="hero-profile-image-wrapper">

                                <img
                                    src="{{ asset($home->profile_image) }}"
                                    alt="{{ $home?->name ?? 'Profile Photo' }}"
                                    class="hero-profile-image"
                                >

                            </div>

                        </div>

                    @else

                        <div class="hero-profile-card">

                            <div class="hero-profile-image-wrapper hero-profile-placeholder">

                                <i class="fa-solid fa-user"></i>

                            </div>

                        </div>

                    @endif


                    {{-- =================================================
                        TECHNOLOGY BADGES
                    ================================================== --}}

                    <div class="hero-tech-badge hero-tech-laravel">

                        <i class="fa-brands fa-laravel"></i>

                        <span>Laravel</span>

                    </div>


                    <div class="hero-tech-badge hero-tech-php">

                        <i class="fa-brands fa-php"></i>

                        <span>PHP</span>

                    </div>


                    <div class="hero-tech-badge hero-tech-mysql">

                        <i class="fa-solid fa-database"></i>

                        <span>MySQL</span>

                    </div>


                    <div class="hero-tech-badge hero-tech-bootstrap">

                        <i class="fa-brands fa-bootstrap"></i>

                        <span>Bootstrap</span>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- SCROLL INDICATOR --}}

    <a
        href="#about"
        class="scroll-indicator"
    >
        <i class="fa-solid fa-chevron-down"></i>
    </a>

</section>