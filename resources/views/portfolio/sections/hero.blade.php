<section id="home" class="hero-section">

    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>

    <div class="container position-relative">

        <div class="row align-items-center hero-content">

            {{-- =========================
                HERO LEFT
            ========================== --}}
            <div class="col-lg-6 hero-left">

                <div class="hero-badge">
                    <span></span>
                    HELLO, I'M
                </div>

                <h1 class="hero-title">
                    {{ $profile->name }}
                </h1>

                <div class="hero-role">
                    {{ $profile->title }}
                    <span class="typing-cursor">|</span>
                </div>

                <p class="hero-description">
                    {{ $profile->bio }}
                </p>

                <div class="hero-buttons">

                    <a href="#projects" class="btn hero-btn-primary">
                        <i class="fa-solid fa-briefcase"></i>
                        View Projects
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="#contact" class="btn hero-btn-outline">
                        <i class="fa-regular fa-envelope"></i>
                        Contact Me
                    </a>

                </div>

                {{-- SOCIAL MEDIA --}}
                <div class="hero-social">

                    <a
                        href="#"
                        class="social-btn"
                        title="GitHub"
                    >
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a
                        href="#"
                        class="social-btn"
                        title="LinkedIn"
                    >
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    @if($profile->email)

                        <a
                            href="mailto:{{ $profile->email }}"
                            class="social-btn"
                            title="Email"
                        >
                            <i class="fa-solid fa-envelope"></i>
                        </a>

                    @endif

                </div>

            </div>


            {{-- =========================
                HERO RIGHT
            ========================== --}}
            <div class="col-lg-6 hero-right">

                <div class="hero-visual">

                    <div class="hero-circle"></div>

                    {{-- CODE WINDOW --}}
                    <div class="code-card">

                        <div class="code-header">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>

                        <div class="code-content">

<pre><code>&lt;?php

class Developer
{
    public function build()
    {
        return [
            'Laravel',
            'PHP',
            'MySQL',
            'Bootstrap'
        ];
    }
}
</code></pre>

                        </div>

                    </div>


                    {{-- TECHNOLOGY BADGES --}}

                    <div class="tech-badge tech-laravel">

                        <i class="fa-brands fa-laravel"></i>

                        <span>
                            Laravel
                        </span>

                    </div>


                    <div class="tech-badge tech-php">

                        <i class="fa-brands fa-php"></i>

                        <span>
                            PHP
                        </span>

                    </div>


                    <div class="tech-badge tech-mysql">

                        <i class="fa-solid fa-database"></i>

                        <span>
                            MySQL
                        </span>

                    </div>


                    <div class="tech-badge tech-bootstrap">

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

    <a href="#about" class="scroll-indicator">

        <i class="fa-solid fa-chevron-down"></i>

    </a>

</section>