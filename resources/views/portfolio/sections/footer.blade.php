<footer class="portfolio-footer">

    <div class="container">

        <div class="footer-content">

            <div class="footer-brand">

                <a href="#home">
                    Paisal<span>Johen2</span>
                </a>

                <p>
                    Web Developer focused on building modern
                    and useful web applications.
                </p>

            </div>


            <div class="footer-links">

                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#education">Education</a>
                <a href="#contact">Contact</a>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }}
                {{ $profile->name ?? 'Paisal Johen' }}.
                All Rights Reserved.
            </p>

            <span>
                Built with Laravel & Bootstrap
            </span>

        </div>

    </div>

</footer>