<section id="about" class="about-section">

    <div class="about-glow about-glow-1"></div>
    <div class="about-glow about-glow-2"></div>

    <div class="container position-relative">

        <div class="row align-items-center g-5">

            {{-- =========================
                ABOUT LEFT
            ========================== --}}
            <div class="col-lg-6">

                <div class="section-label">
                    <span></span>
                    ABOUT ME
                </div>

                <h2 class="about-title">
                    Get to know
                    <span>me better</span>
                </h2>

                <p class="about-description">
                    {{ $profile->bio }}
                </p>

                <p class="about-description">
                    Saya memiliki ketertarikan yang besar dalam dunia
                    teknologi, khususnya pengembangan aplikasi web.
                    Saya selalu berusaha untuk belajar hal baru,
                    meningkatkan kemampuan, dan menciptakan solusi
                    yang bermanfaat melalui kode.
                </p>


                {{-- INFORMATION CARDS --}}
                <div class="about-info-grid">

                    @if($profile->location)

                        <div class="about-info-card">

                            <div class="about-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <small>Location</small>
                                <strong>{{ $profile->location }}</strong>
                            </div>

                        </div>

                    @endif


                    <div class="about-info-card">

                        <div class="about-info-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>
                            <small>Focus</small>
                            <strong>Web Development</strong>
                        </div>

                    </div>


                    <div class="about-info-card">

                        <div class="about-info-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <div>
                            <small>Framework</small>
                            <strong>Laravel</strong>
                        </div>

                    </div>


                    <div class="about-info-card">

                        <div class="about-info-icon">
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <div>
                            <small>Database</small>
                            <strong>MySQL</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =========================
                ABOUT RIGHT
            ========================== --}}
            <div class="col-lg-6">

                <div class="about-visual">

                    <div class="about-visual-glow"></div>

                    {{-- MAIN CARD --}}
                    <div class="developer-card">

                        <div class="developer-card-grid"></div>

                        <div class="developer-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="developer-content">

                            <span>WEB DEVELOPER</span>

                            <h3>
                                Build.
                                <span>Learn.</span>
                                Create.
                            </h3>

                            <p>
                                Turning ideas into modern web
                                applications through clean and
                                meaningful code.
                            </p>

                        </div>

                        <div class="developer-line"></div>

                    </div>


                    {{-- QUOTE --}}
                    <div class="about-quote">

                        <div class="quote-icon">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <p>
                            Selalu berusaha memberikan hasil terbaik
                            dalam setiap project yang dikerjakan.
                        </p>

                    </div>


                    {{-- FEATURE CARDS --}}

                    <div class="about-feature feature-1">

                        <div class="feature-icon">
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>

                        <div>
                            <strong>Problem Solving</strong>
                            <small>
                                Mencari solusi terbaik untuk setiap
                                tantangan.
                            </small>
                        </div>

                    </div>


                    <div class="about-feature feature-2">

                        <div class="feature-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div>
                            <strong>Teamwork</strong>
                            <small>
                                Bekerja sama untuk hasil yang lebih baik.
                            </small>
                        </div>

                    </div>


                    <div class="about-feature feature-3">

                        <div class="feature-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <div>
                            <strong>Continuous Learning</strong>
                            <small>
                                Selalu belajar teknologi terbaru.
                            </small>
                        </div>

                    </div>


                    <div class="about-feature feature-4">

                        <div class="feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div>
                            <strong>Clean Code</strong>
                            <small>
                                Menulis kode yang rapi dan mudah
                                dipelihara.
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>