<section id="education" class="education-section">

    {{-- BACKGROUND --}}
    <div class="education-grid-bg"></div>

    <div class="education-glow education-glow-1"></div>
    <div class="education-glow education-glow-2"></div>

    <div class="education-orbit education-orbit-1"></div>
    <div class="education-orbit education-orbit-2"></div>


    <div class="container position-relative">


        {{-- =================================================
            HEADER
        ================================================== --}}

        <div class="education-header">

            <div class="section-label">
                <span></span>
                MY EDUCATION
            </div>


            <h2 class="education-title">
                My <span>Education</span>
            </h2>


            <p class="education-subtitle">
                Latar belakang pendidikan yang menjadi dasar
                perjalanan saya dalam dunia teknologi dan pengembangan web.
            </p>

        </div>


        {{-- =================================================
            EDUCATION INTRO
        ================================================== --}}

        <div class="education-intro">


            {{-- LEFT : EDUCATION SUMMARY --}}

            <div class="education-intro-content">

                <div class="education-intro-label">
                    <span></span>
                    ACADEMIC JOURNEY
                </div>


                <h3>
                    Learning,
                    <span>Growing & Building.</span>
                </h3>


                <p>
                    Pendidikan menjadi salah satu fondasi penting
                    dalam perjalanan saya untuk memahami teknologi,
                    mengembangkan kemampuan, dan membangun aplikasi web.
                </p>


                <div class="education-stats">


                    <div class="education-stat">

                        <div class="education-stat-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="education-stat-content">

                            <strong>
                                {{ $educations->count() }}+
                            </strong>

                            <span>
                                Education
                            </span>

                        </div>

                    </div>


                    <div class="education-stat">

                        <div class="education-stat-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <div class="education-stat-content">

                            <strong>
                                {{ $educations->pluck('field_of_study')->filter()->unique()->count() }}+
                            </strong>

                            <span>
                                Fields
                            </span>

                        </div>

                    </div>


                    <div class="education-stat">

                        <div class="education-stat-icon">
                            <i class="fa-solid fa-school"></i>
                        </div>

                        <div class="education-stat-content">

                            <strong>
                                {{ $educations->pluck('institution')->filter()->unique()->count() }}+
                            </strong>

                            <span>
                                Institutions
                            </span>

                        </div>

                    </div>


                    <div class="education-stat">

                        <div class="education-stat-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>

                        <div class="education-stat-content">

                            <strong>
                                100%
                            </strong>

                            <span>
                                Learning
                            </span>

                        </div>

                    </div>


                </div>

            </div>


            {{-- RIGHT : EDUCATION VISUAL --}}

            <div class="education-visual">


                <div class="education-visual-orbit education-visual-orbit-1"></div>
                <div class="education-visual-orbit education-visual-orbit-2"></div>
                <div class="education-visual-orbit education-visual-orbit-3"></div>


                <div class="education-visual-card">


                    <div class="education-visual-glow"></div>


                    <div class="education-cap">

                        <div class="education-cap-top"></div>

                        <div class="education-cap-base"></div>

                        <div class="education-cap-tassel"></div>

                    </div>


                    <div class="education-visual-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>


                    <span>
                        LEARN
                    </span>

                    <strong>
                        GROW
                    </strong>


                </div>


                {{-- FLOATING BADGES --}}

                <div class="education-visual-badge education-visual-badge-book">

                    <i class="fa-solid fa-book-open"></i>

                </div>


                <div class="education-visual-badge education-visual-badge-code">

                    <i class="fa-solid fa-code"></i>

                </div>


                <div class="education-visual-badge education-visual-badge-light">

                    <i class="fa-regular fa-lightbulb"></i>

                </div>


            </div>

        </div>


        {{-- =================================================
            EDUCATION HISTORY
        ================================================== --}}

        <div class="education-history">


            <div class="education-history-header">

                <div>

                    <div class="education-history-label">

                        <span></span>

                        EDUCATION HISTORY

                    </div>


                    <h2 class="education-history-title">

                        My Education
                        <span>Background</span>

                    </h2>

                </div>


                <p class="education-history-subtitle">

                    Riwayat pendidikan yang menjadi bagian
                    dari perjalanan saya dalam belajar dan berkembang.

                </p>

            </div>


            {{-- =================================================
                TIMELINE
            ================================================== --}}

            <div class="education-timeline">

                @forelse($educations as $education)

                    <article class="education-item">


                        {{-- TIMELINE --}}

                        <div class="education-timeline-side">

                            <div class="education-timeline-dot">
                                <span></span>
                            </div>


                            @if(!$loop->last)

                                <div class="education-timeline-line"></div>

                            @endif

                        </div>


                        {{-- PERIOD --}}

                        <div class="education-period">

                            @if($education->start_date)

                                <span>
                                    {{ $education->start_date->format('Y') }}
                                </span>

                            @endif


                            @if($education->start_date && $education->end_date)

                                <span class="education-period-separator">
                                    —
                                </span>

                            @endif


                            @if($education->end_date)

                                <span>
                                    {{ $education->end_date->format('Y') }}
                                </span>

                            @elseif($education->is_current)

                                <span>
                                    Present
                                </span>

                            @endif

                        </div>


                        {{-- CARD --}}

                        <div class="education-card">


                            <div class="education-card-top">

                                <div class="education-icon">

                                    <i class="fa-solid fa-graduation-cap"></i>

                                </div>


                                <div class="education-card-label">
                                    EDUCATION
                                </div>

                            </div>


                            <div class="education-card-content">


                                <h3>
                                    {{ $education->institution }}
                                </h3>


                                @if($education->degree)

                                    <h4>
                                        {{ $education->degree }}
                                    </h4>

                                @endif


                                @if($education->field_of_study)

                                    <div class="education-field">

                                        <i class="fa-solid fa-book-open"></i>

                                        <span>
                                            {{ $education->field_of_study }}
                                        </span>

                                    </div>

                                @endif


                                @if($education->description)

                                    <p class="education-description">
                                        {{ $education->description }}
                                    </p>

                                @endif


                            </div>


                            {{-- CARD FOOTER --}}

                            <div class="education-card-footer">


                                <span>

                                    <i class="fa-solid fa-circle-check"></i>

                                    @if($education->is_current)

                                        Currently Studying

                                    @else

                                        Education Completed

                                    @endif

                                </span>


                                <i class="fa-solid fa-arrow-right"></i>


                            </div>


                        </div>

                    </article>


                @empty


                    <div class="education-empty">

                        <div class="education-empty-icon">

                            <i class="fa-solid fa-graduation-cap"></i>

                        </div>


                        <h3>
                            No Education Yet
                        </h3>


                        <p>
                            Data pendidikan yang ditambahkan melalui Admin
                            akan ditampilkan di sini.
                        </p>

                    </div>


                @endforelse

            </div>

        </div>


        {{-- =================================================
            BOTTOM
        ================================================== --}}

        <div class="education-bottom">

            <div class="education-bottom-icon">

                <i class="fa-solid fa-code"></i>

            </div>


            <div class="education-bottom-content">

                <strong>
                    Learning today, building tomorrow.
                </strong>

                <p>
                    Setiap ilmu yang saya pelajari menjadi
                    bagian dari perjalanan untuk terus berkembang.
                </p>

            </div>


            <div class="education-bottom-arrow">

                <i class="fa-solid fa-arrow-right"></i>

            </div>

        </div>


    </div>

</section>