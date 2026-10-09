
<footer class="portfolio-footer" id="footer">

    {{-- BACKGROUND DECORATION --}}
    <div class="footer-grid-bg"></div>
    <div class="footer-glow footer-glow-1"></div>
    <div class="footer-glow footer-glow-2"></div>
    <div class="footer-orbit footer-orbit-1"></div>
    <div class="footer-orbit footer-orbit-2"></div>

    <div class="container position-relative footer-container">

        {{-- BRAND --}}
        <div class="footer-brand">

            <a href="#home" class="footer-logo">
                <span class="footer-logo-icon">
                    <i class="fa-solid fa-code"></i>
                </span>

                <span class="footer-logo-name">
                    Paisal<span>Johen</span>
                </span>
            </a>

            <p class="footer-description">
                Web Developer yang selalu belajar,
                membangun solusi digital, dan berkomitmen
                untuk terus berkembang.
            </p>

            {{-- SOCIAL LINKS --}}
            <div class="footer-socials">

                @if($home?->github_url)
                    <a
                        href="{{ $home->github_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub"
                        title="GitHub"
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
                        title="LinkedIn"
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
                        title="Instagram"
                    >
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                @endif

            </div>

        </div>

        {{-- FOOTER COLUMNS --}}
        <div class="footer-columns">

            {{-- QUICK LINKS --}}
            <div class="footer-navigation">

                <h3 class="footer-heading">
                    Quick Links
                </h3>

                <nav class="footer-links" aria-label="Footer navigation">
                    <a href="#home">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>Home</span>
                    </a>

                    <a href="#about">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>About Me</span>
                    </a>

                    <a href="#education">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>Education</span>
                    </a>

                    <a href="#certificates">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>Certificates</span>
                    </a>

                    <a href="#projects">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>Portfolio</span>
                    </a>

                    <a href="#contact">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>Contact</span>
                    </a>
                </nav>

            </div>

            {{-- CONTACT INFORMATION --}}
            <div class="footer-contact">

                <h3 class="footer-heading">
                    Contact Info
                </h3>

                {{-- EMAIL --}}
                @if($home?->email)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="footer-contact-text">
                            <strong>Email</strong>
                            <a href="mailto:{{ $home->email }}">
                                {{ $home->email }}
                            </a>
                            <span>Kirim email kapan saja</span>
                        </div>
                    </div>
                @endif

                {{-- PHONE --}}
                @if($home?->phone)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="footer-contact-text">
                            <strong>Telepon</strong>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $home->phone) }}">
                                {{ $home->phone }}
                            </a>
                            <span>Silakan hubungi saya</span>
                        </div>
                    </div>
                @endif

                {{-- LOCATION --}}
                @if($home?->location)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="footer-contact-text">
                            <strong>Lokasi</strong>
                            <span class="footer-location">
                                {{ $home->location }}
                            </span>
                            <span>Indonesia</span>
                        </div>
                    </div>
                @endif

            </div>

            {{-- STAY CONNECTED --}}
            <div class="footer-newsletter">

                <h3 class="footer-heading">
                    Stay Connected
                </h3>

                <p>
                    Ikuti saya untuk mendapatkan update terbaru
                    seputar project dan konten menarik lainnya.
                </p>

                <a href="#contact" class="footer-newsletter-link">
                    <i class="fa-regular fa-envelope"></i>
                    <span>Hubungi saya</span>
                    <span class="footer-newsletter-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>

            </div>

        </div>

        {{-- BOTTOM DIVIDER --}}
        <div class="footer-divider"></div>

        {{-- COPYRIGHT --}}
        <div class="footer-bottom">

            <div class="footer-copyright">
                <span>© {{ date('Y') }} Paisal Johen.</span>
                <span class="footer-copyright-separator">•</span>
                <span>All rights reserved.</span>
            </div>

            <div class="footer-bottom-right">
                <span class="footer-motto">
                    <span>Build</span>
                    <i>•</i>
                    <span>Learn</span>
                    <i>•</i>
                    <span>Grow</span>
                </span>

                <a
                    href="#home"
                    class="footer-back-top"
                    aria-label="Kembali ke atas"
                    title="Kembali ke atas"
                >
                    <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>

        </div>

    </div>

</footer>

