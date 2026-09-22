<footer class="portfolio-footer">

    <div class="footer-glow footer-glow-1"></div>
    <div class="footer-glow footer-glow-2"></div>

    <div class="container position-relative">

        {{-- MAIN FOOTER --}}
        <div class="footer-main">

            {{-- BRAND --}}
            <div class="footer-brand">

                <a href="#home" class="footer-logo">
                    <span class="footer-logo-icon">
                        <i class="fa-solid fa-code"></i>
                    </span>

                    <span>
                        Paisal<span>Johen</span>
                    </span>
                </a>

                <p class="footer-description">
                    Web Developer yang berfokus pada pengembangan
                    aplikasi web menggunakan Laravel, PHP, MySQL,
                    dan teknologi web modern.
                </p>

            </div>


            {{-- NAVIGATION --}}
            <div class="footer-navigation">

                <div class="footer-heading">
                    NAVIGATION
                </div>

                <div class="footer-links">

                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#projects">Projects</a>
                    <a href="#experience">Experience</a>
                    <a href="#education">Education</a>
                    <a href="#certificates">Certificates</a>
                    <a href="#contact">Contact</a>

                </div>

            </div>


            {{-- CONNECT --}}
            <div class="footer-connect">

                <div class="footer-heading">
                    CONNECT
                </div>

                <p>
                    Let's connect and discuss opportunities,
                    projects, or collaboration.
                </p>

                <div class="footer-socials">

                    @if($home?->github_url)

                        <a
                            href="{{ $home->github_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="GitHub"
                        >
                            <i class="fa-brands fa-github"></i>
                        </a>

                    @endif


                    @if($home?->linkedin_url)

                        <a
                            href="{{ $home->linkedin_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn"
                        >
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                    @endif


                    @if($home?->instagram_url)

                        <a
                            href="{{ $home->instagram_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                    @endif

                </div>

            </div>

        </div>


        {{-- DIVIDER --}}
        <div class="footer-divider"></div>


        {{-- BOTTOM --}}
        <div class="footer-bottom">

            <div class="footer-copyright">

                <span>
                    © {{ date('Y') }} Paisal Johen.
                </span>

                <span class="footer-copyright-separator">
                    •
                </span>

                <span>
                    All rights reserved.
                </span>

            </div>


            <div class="footer-bottom-right">

                <span class="footer-made-with">
                    Built with
                    <i class="fa-solid fa-code"></i>
                    Laravel
                </span>

                <a
                    href="#home"
                    class="footer-back-top"
                    aria-label="Back to top"
                >
                    <i class="fa-solid fa-arrow-up"></i>
                </a>

            </div>

        </div>

    </div>

</footer>