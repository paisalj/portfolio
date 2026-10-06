<section id="experience" class="experience-section">

    {{-- =====================================================
        BACKGROUND DECORATION
    ====================================================== --}}

    <div class="experience-grid-bg"></div>

    <div class="experience-glow experience-glow-1"></div>
    <div class="experience-glow experience-glow-2"></div>

    <div class="experience-orbit experience-orbit-1"></div>
    <div class="experience-orbit experience-orbit-2"></div>


    <div class="container position-relative">

        {{-- =================================================
            INTRO
        ================================================== --}}

        <div class="experience-intro">

            {{-- LEFT CONTENT --}}
            <div class="experience-intro-content">

                <div class="section-label">
                    <span></span>
                    MY EXPERIENCE
                </div>

                <h2 class="experience-title">
                    My Professional
                    <span>Journey</span>
                </h2>

                <p class="experience-subtitle">
                    Pengalaman saya dalam membangun dan mengembangkan
                    aplikasi web dengan berbagai teknologi modern,
                    baik secara individu maupun dalam tim.
                </p>


                {{-- =================================================
                    STATS
                ================================================== --}}

                <div class="experience-stats">

                    <div class="experience-stat">

                        <div class="experience-stat-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <div class="experience-stat-content">
                            <strong>{{ $experiences->count() }}+</strong>
                            <span>Experience</span>
                        </div>

                    </div>


                    <div class="experience-stat">

                        <div class="experience-stat-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="experience-stat-content">
                            <strong>{{ isset($projects) ? $projects->count() : 0 }}+</strong>
                            <span>Projects</span>
                        </div>

                    </div>


                    <div class="experience-stat">

                        <div class="experience-stat-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>

                        <div class="experience-stat-content">
                            <strong>
                                {{ $experiences->pluck('company')->filter()->unique()->count() }}+
                            </strong>
                            <span>Companies</span>
                        </div>

                    </div>


                    <div class="experience-stat">

                        <div class="experience-stat-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div class="experience-stat-content">
                            <strong>100%</strong>
                            <span>Commitment</span>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                CODE VISUAL
            ================================================== --}}

            <div class="experience-visual">

                <div class="experience-visual-orbit experience-visual-orbit-1"></div>
                <div class="experience-visual-orbit experience-visual-orbit-2"></div>
                <div class="experience-visual-orbit experience-visual-orbit-3"></div>


                <div class="experience-code-window">

                    <div class="experience-code-header">

                        <div class="experience-code-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <span>experience.dev</span>

                    </div>


                    <div class="experience-code-body">

                        <div>
                            <span class="code-number">01</span>
                            <span class="code-keyword">const</span>
                            <span class="code-variable">journey</span>
                            <span class="code-symbol">=</span>
                            <span class="code-bracket">{</span>
                        </div>

                        <div class="code-indent">
                            <span class="code-property">learning:</span>
                            <span class="code-string">"always"</span>
                        </div>

                        <div class="code-indent">
                            <span class="code-property">building:</span>
                            <span class="code-string">"web"</span>
                        </div>

                        <div class="code-indent">
                            <span class="code-property">improving:</span>
                            <span class="code-value">true</span>
                        </div>

                        <div>
                            <span class="code-bracket">};</span>
                        </div>

                        <div class="experience-code-cursor"></div>

                    </div>

                </div>


                <div class="experience-visual-badge experience-visual-badge-code">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div class="experience-visual-badge experience-visual-badge-database">
                    <i class="fa-solid fa-database"></i>
                </div>

                <div class="experience-visual-badge experience-visual-badge-php">
                    <i class="fa-brands fa-php"></i>
                </div>

            </div>

        </div>


        {{-- =================================================
            WORK EXPERIENCE HEADER
        ================================================== --}}

        <div class="experience-work-header">

            <div>

                <div class="experience-work-label">
                    <span></span>
                    WORK EXPERIENCE
                </div>

                <h2 class="experience-work-title">
                    My Work
                    <span>Experience</span>
                </h2>

                <p class="experience-work-subtitle">
                    Perjalanan karir saya dalam dunia pengembangan web,
                    dari pengalaman pertama hingga saat ini.
                </p>

            </div>

        </div>


        {{-- =================================================
            EXPERIENCE LIST
        ================================================== --}}

        <div class="experience-list">

            @forelse($experiences as $experience)

                <article class="experience-item">

                    {{-- TIMELINE --}}
                    <div class="experience-timeline">

                        <div class="experience-dot">
                            <span></span>
                        </div>

                        @if(!$loop->last)
                            <div class="experience-line"></div>
                        @endif

                    </div>


                    {{-- EXPERIENCE CARD --}}
                    <div class="experience-card">

                        {{-- PERIOD --}}
                        <div class="experience-card-period">

                            <span>
                                {{ $experience->start_date?->format('M Y') ?? '-' }}
                            </span>

                            <strong>—</strong>

                            <span>
                                @if($experience->is_current)
                                    Present
                                @else
                                    {{ $experience->end_date?->format('M Y') ?? '-' }}
                                @endif
                            </span>

                            <span class="experience-period-type">

                                @if($experience->is_current)
                                    Current
                                @else
                                    Completed
                                @endif

                            </span>

                        </div>


                        {{-- CARD MAIN --}}
                        <div class="experience-card-main">

                            <div class="experience-company-icon">
                                <i class="fa-solid fa-building"></i>
                            </div>


                            <div class="experience-card-content">

                                <span class="experience-card-label">
                                    PROFESSIONAL EXPERIENCE
                                </span>

                                <h3>
                                    {{ $experience->position }}
                                </h3>

                                <h4>
                                    {{ $experience->company }}
                                </h4>


                                @if($experience->description)

                                    <p class="experience-description">
                                        {{ $experience->description }}
                                    </p>

                                @endif


                                @if($experience->location)

                                    <div class="experience-location">

                                        <i class="fa-solid fa-location-dot"></i>

                                        <span>
                                            {{ $experience->location }}
                                        </span>

                                    </div>

                                @endif

                            </div>


                            <div class="experience-card-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>

                        </div>


                        {{-- CARD FOOTER --}}
                        <div class="experience-card-footer">

                            <div class="experience-status">

                                <span class="experience-status-dot"></span>

                                @if($experience->is_current)
                                    Currently Working
                                @else
                                    Completed
                                @endif

                            </div>

                            <div class="experience-card-footer-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>

                        </div>

                    </div>

                </article>

            @empty

                <div class="experience-empty">

                    <div class="experience-empty-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>

                    <h3>
                        No Experience Yet
                    </h3>

                    <p>
                        Pengalaman yang ditambahkan melalui Admin
                        akan ditampilkan di sini.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- =================================================
            BOTTOM MESSAGE
        ================================================== --}}

        <div class="experience-bottom">

            <div class="experience-bottom-icon">
                <i class="fa-solid fa-rocket"></i>
            </div>

            <div class="experience-bottom-content">

                <strong>
                    Terus belajar, terus berkembang.
                </strong>

                <p>
                    Setiap pengalaman adalah langkah untuk menjadi
                    versi terbaik dari diri saya.
                </p>

            </div>

            <div class="experience-bottom-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>

    </div>

</section>