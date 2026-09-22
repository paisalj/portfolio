<section id="home" class="hero-section">

    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>

    <div class="container position-relative">

        <div class="row align-items-center hero-content">

            {{-- =====================================================
                HERO LEFT
            ====================================================== --}}
            <div class="col-lg-6 hero-left">

                {{-- BADGE --}}
                <div class="hero-badge">

                    <span></span>


                </div>


                {{-- NAME --}}
                <h1 class="hero-title">

                    {{ $home?->name ?? 'Paisal Johen' }}

                </h1>


                {{-- ROLE --}}
                <div class="hero-role">

                    {{ $home?->title ?? 'Web Developer' }}

                    <span class="typing-cursor">
                        |
                    </span>

                </div>


                {{-- DESCRIPTION --}}
                <p class="hero-description">

                    {{ $home?->hero_description ?? 'Saya adalah Web Developer yang memiliki minat dalam pengembangan aplikasi web menggunakan Laravel, PHP, MySQL, dan Bootstrap.' }}

                </p>


                {{-- =================================================
                    BUTTONS
                ================================================== --}}
                <div class="hero-buttons">

                    {{-- PROJECT --}}
                    <a
                        href="#projects"
                        class="btn hero-btn-primary"
                    >

                        <i class="fa-solid fa-briefcase"></i>

                        View Projects

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    {{-- CONTACT --}}
                    <a
                        href="#contact"
                        class="btn hero-btn-outline"
                    >

                        <i class="fa-regular fa-envelope"></i>

                        Contact Me

                    </a>


                    {{-- CV --}}
                    @if($home?->cv_file)

                        <a
                            href="{{ asset('storage/' . $home->cv_file) }}"
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

                    {{-- GITHUB --}}
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


                    {{-- LINKEDIN --}}
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


                    {{-- INSTAGRAM --}}
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
                HERO RIGHT
            ====================================================== --}}
            <div class="col-lg-6 hero-right">

                <div class="hero-profile-visual">

                    {{-- BACKGROUND CIRCLE --}}
                    <div class="hero-profile-circle"></div>


                    {{-- DECORATIVE RING --}}
                    <div class="hero-profile-ring"></div>


                    {{-- PROFILE IMAGE --}}
                    @if($home?->profile_image)

                        <div class="hero-profile-card">

                            <div class="hero-profile-image-wrapper">

                                <img
                                    src="{{ asset('storage/' . $home->profile_image) }}"
                                    alt="{{ $home?->name ?? 'Profile Photo' }}"
                                    class="hero-profile-image"
                                >

                            </div>

                        </div>

                    @else

                        {{-- FALLBACK --}}
                        <div class="hero-profile-card">

                            <div class="hero-profile-placeholder">

                                <i class="fa-solid fa-user"></i>

                            </div>

                        </div>

                    @endif


                    {{-- =================================================
                        TECHNOLOGY BADGES
                    ================================================== --}}

                    {{-- LARAVEL --}}
                    <div class="hero-tech-badge hero-tech-laravel">

                        <i class="fa-brands fa-laravel"></i>

                        <span>
                            Laravel
                        </span>

                    </div>


                    {{-- PHP --}}
                    <div class="hero-tech-badge hero-tech-php">

                        <i class="fa-brands fa-php"></i>

                        <span>
                            PHP
                        </span>

                    </div>


                    {{-- MYSQL --}}
                    <div class="hero-tech-badge hero-tech-mysql">

                        <i class="fa-solid fa-database"></i>

                        <span>
                            MySQL
                        </span>

                    </div>


                    {{-- BOOTSTRAP --}}
                    <div class="hero-tech-badge hero-tech-bootstrap">

                        <i class="fa-brands fa-bootstrap"></i>

                        <span>
                            Bootstrap
                        </span>

                    </div>


                    {{-- DECORATION --}}
                    <div class="hero-decoration decoration-1"></div>

                    <div class="hero-decoration decoration-2"></div>

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