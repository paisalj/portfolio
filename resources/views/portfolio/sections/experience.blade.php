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
            HERO / INTRO
        ================================================== --}}
        <div class="experience-intro">

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


                {{-- =========================================
                    EXPERIENCE STATS
                ========================================== --}}
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
                            <strong>{{ $experiences->pluck('company')->filter()->unique()->count() }}+</strong>
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


            {{-- =============================================
                CODE / LAPTOP VISUAL
            ============================================== --}}
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


                {{-- Floating code icon --}}
                <div class="experience-visual-badge experience-visual-badge-code">
                    <i class="fa-solid fa-code"></i>
                </div>


                {{-- Floating database icon --}}
                <div class="experience-visual-badge experience-visual-badge-database">
                    <i class="fa-solid fa-database"></i>
                </div>


                {{-- Floating PHP icon --}}
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
                    dari posisi junior hingga saat ini.
                </p>

            </div>


            {{-- =============================================
                FILTER
            ============================================== --}}
            <div class="experience-filter">

                <button
                    type="button"
                    class="experience-filter-btn active"
                    data-filter="all"
                >
                    All
                </button>

                <button
                    type="button"
                    class="experience-filter-btn"
                    data-filter="web"
                >
                    Web App
                </button>

                <button
                    type="button"
                    class="experience-filter-btn"
                    data-filter="landing"
                >
                    Landing Page
                </button>

                <button
                    type="button"
                    class="experience-filter-btn"
                    data-filter="dashboard"
                >
                    Dashboard
                </button>

            </div>

        </div>


        {{-- =================================================
            EXPERIENCE LIST
        ================================================== --}}
        <div class="experience-list">

            @forelse($experiences as $experience)

                @php
                    /*
                     * Filter visual.
                     * Untuk saat ini pengalaman ditampilkan sebagai
                     * Web App berdasarkan posisi/deskripsi.
                     * Database tidak perlu ditambah.
                     */
                    $experienceSearchText = strtolower(
                        ($experience->position ?? '') . ' ' .
                        ($experience->description ?? '')
                    );

                    $experienceCategory = 'web';

                    if (
                        str_contains($experienceSearchText, 'landing')
                    ) {
                        $experienceCategory = 'landing';
                    } elseif (
                        str_contains($experienceSearchText, 'dashboard')
                    ) {
                        $experienceCategory = 'dashboard';
                    }
                @endphp


                <article
                    class="experience-item"
                    data-experience-category="{{ $experienceCategory }}"
                >

                    {{-- =====================================
                        TIMELINE
                    ====================================== --}}
                    <div class="experience-timeline">

                        <div class="experience-dot">
                            <span></span>
                        </div>

                        @if(!$loop->last)
                            <div class="experience-line"></div>
                        @endif

                    </div>


                    {{-- =====================================
                        PERIOD
                    ====================================== --}}
                    <div class="experience-period">

                        <span class="experience-period-start">
                            {{ $experience->start_date?->format('Y') ?? '-' }}
                        </span>

                        <span class="experience-period-separator">
                            —
                        </span>

                        <span class="experience-period-end">

                            @if($experience->is_current)

                                Present

                            @else

                                {{ $experience->end_date?->format('Y') ?? '-' }}

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


                    {{-- =====================================
                        EXPERIENCE CARD
                    ====================================== --}}
                    <div class="experience-card">

                        <div class="experience-card-main">


                            {{-- COMPANY ICON --}}
                            <div class="experience-company-icon">

                                <span>
                                    {{ strtoupper(substr($experience->company ?? 'E', 0, 1)) }}
                                </span>

                            </div>


                            {{-- CONTENT --}}
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


                                {{-- LOCATION --}}
                                @if($experience->location)

                                    <div class="experience-location">

                                        <i class="fa-solid fa-location-dot"></i>

                                        <span>
                                            {{ $experience->location }}
                                        </span>

                                    </div>

                                @endif

                            </div>


                            {{-- CARD ARROW --}}
                            <div class="experience-card-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>

                        </div>


                        {{-- =================================
                            STATUS
                        ================================== --}}
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


    {{-- =====================================================
        FILTER SCRIPT
    ====================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const filterButtons = document.querySelectorAll(
                '.experience-filter-btn'
            );

            const experienceItems = document.querySelectorAll(
                '.experience-item'
            );

            filterButtons.forEach(function (button) {

                button.addEventListener('click', function () {

                    const filter = this.dataset.filter;

                    filterButtons.forEach(function (btn) {
                        btn.classList.remove('active');
                    });

                    this.classList.add('active');


                    experienceItems.forEach(function (item) {

                        const category =
                            item.dataset.experienceCategory;

                        if (
                            filter === 'all' ||
                            category === filter
                        ) {

                            item.classList.remove(
                                'experience-filter-hidden'
                            );

                            requestAnimationFrame(function () {

                                item.classList.add(
                                    'experience-filter-visible'
                                );

                            });

                        } else {

                            item.classList.remove(
                                'experience-filter-visible'
                            );

                            item.classList.add(
                                'experience-filter-hidden'
                            );

                        }

                    });

                });

            });

        });
    </script>

</section>