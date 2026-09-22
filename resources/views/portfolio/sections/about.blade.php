<section id="about" class="about-section">

    <div class="about-glow about-glow-1"></div>
    <div class="about-glow about-glow-2"></div>

    <div class="container position-relative">

        <div class="row align-items-center g-5">

            {{-- =========================================
                ABOUT LEFT
            ========================================== --}}
            <div class="col-lg-6 about-left">

                {{-- LABEL --}}
                <div class="section-label">
                    <span></span>
                    ABOUT ME
                </div>

                {{-- TITLE --}}
                <h2 class="about-title">
                    Get to know
                    <span>me</span>
                    better
                </h2>

                {{-- DESCRIPTION --}}
                <div class="about-description">

                    @if($about?->description)
                        <p>
                            {{ $about->description }}
                        </p>
                    @else
                        <p>
                            Saya memiliki ketertarikan yang besar dalam dunia
                            teknologi, khususnya pengembangan aplikasi web.
                            Saya selalu berusaha untuk belajar hal baru,
                            meningkatkan kemampuan, dan menciptakan solusi
                            yang bermanfaat melalui kode.
                        </p>
                    @endif

                </div>


                {{-- =========================================
                    ABOUT INFORMATION
                ========================================== --}}
                <div class="about-info-grid">

                    {{-- LOCATION --}}
                    @if($about?->location)

                        <div class="about-info-card">

                            <div class="about-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <small>Location</small>

                                <strong>
                                    {{ $about->location }}
                                </strong>
                            </div>

                        </div>

                    @endif


                    {{-- FOCUS --}}
                    @if($about?->focus)

                        <div class="about-info-card">

                            <div class="about-info-icon">
                                <i class="fa-solid fa-code"></i>
                            </div>

                            <div>
                                <small>Focus</small>

                                <strong>
                                    {{ $about->focus }}
                                </strong>
                            </div>

                        </div>

                    @endif


                    {{-- FRAMEWORK --}}
                    @if($about?->framework)

                        <div class="about-info-card">

                            <div class="about-info-icon">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>

                            <div>
                                <small>Framework</small>

                                <strong>
                                    {{ $about->framework }}
                                </strong>
                            </div>

                        </div>

                    @endif


                    {{-- DATABASE --}}
                    @if($about?->database)

                        <div class="about-info-card">

                            <div class="about-info-icon">
                                <i class="fa-solid fa-database"></i>
                            </div>

                            <div>
                                <small>Database</small>

                                <strong>
                                    {{ $about->database }}
                                </strong>
                            </div>

                        </div>

                    @endif

                </div>

            </div>


            {{-- =========================================
                ABOUT RIGHT
            ========================================== --}}
            <div class="col-lg-6 about-right">

                <div class="about-visual">

                    {{-- MAIN CARD --}}
                    <div class="about-main-card">

                        <div class="about-code-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="about-card-label">
                            WEB DEVELOPER
                        </div>

                        <h3>
                            Build.
                            <span>Learn.</span>
                            Create.
                        </h3>

                        <p>
                            Saya terus mengembangkan kemampuan dalam
                            membangun aplikasi web yang modern,
                            responsif, dan terstruktur.
                        </p>

                    </div>


                    {{-- VALUES / QUOTE --}}
                    @if($about?->values)

                        <div class="about-quote-card">

                            <div class="about-quote-icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <p>
                                {{ $about->values }}
                            </p>

                        </div>

                    @endif


                    {{-- PROBLEM SOLVING --}}
                    <div class="about-floating-card about-card-problem">

                        <div class="about-floating-icon">
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>

                        <div>
                            <strong>Problem Solving</strong>

                            <span>
                                Mencari solusi terbaik
                                untuk setiap tantangan.
                            </span>
                        </div>

                    </div>


                    {{-- TEAMWORK --}}
                    <div class="about-floating-card about-card-teamwork">

                        <div class="about-floating-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div>
                            <strong>Teamwork</strong>

                            <span>
                                Bekerja sama untuk hasil
                                yang lebih baik.
                            </span>
                        </div>

                    </div>


                    {{-- CONTINUOUS LEARNING --}}
                    <div class="about-floating-card about-card-learning">

                        <div class="about-floating-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <div>
                            <strong>Continuous Learning</strong>

                            <span>
                                Selalu belajar teknologi
                                terbaru.
                            </span>
                        </div>

                    </div>


                    {{-- CLEAN CODE --}}
                    <div class="about-floating-card about-card-code">

                        <div class="about-floating-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div>
                            <strong>Clean Code</strong>

                            <span>
                                Menulis kode yang rapi
                                dan mudah dipelihara.
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>