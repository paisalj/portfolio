<section id="skills" class="skills-section">

    {{-- =====================================================
        BACKGROUND
    ====================================================== --}}

    <div class="skills-grid-bg"></div>

    <div class="skills-glow skills-glow-1"></div>
    <div class="skills-glow skills-glow-2"></div>
    <div class="skills-glow skills-glow-3"></div>

    <div class="skills-orbit-bg skills-orbit-bg-1"></div>
    <div class="skills-orbit-bg skills-orbit-bg-2"></div>


    <div class="container position-relative">

        {{-- =====================================================
            HEADER
        ====================================================== --}}

        <div class="skills-header">

            <div class="section-label">
                <span></span>
                MY SKILLS
            </div>

            <h2 class="skills-title">
                Tools I Use to
                <span>Build Great Things</span>
            </h2>

            <p class="skills-subtitle">
                Beberapa teknologi dan tools yang saya gunakan
                untuk membangun aplikasi web yang modern,
                responsif, dan terstruktur.
            </p>

        </div>


        {{-- =====================================================
            MAIN CONTENT
        ====================================================== --}}

        <div class="skills-main">


            {{-- =================================================
                LEFT : SKILL LIST
            ================================================== --}}

            <div class="skills-list-wrapper">

                <div class="skills-list-header">

                    <div>
                        <span>TECHNOLOGIES</span>
                        <h3>My Technical Skills</h3>
                    </div>

                    <div class="skills-list-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                </div>


                <div class="skills-list">

                    @forelse($skills as $skill)

                        <div class="skill-card">

                            {{-- ICON --}}
                            <div class="skill-icon">

                                @php
                                    $icon = 'fa-solid fa-code';

                                    $skillName = strtolower($skill->name);

                                    if (str_contains($skillName, 'php')) {
                                        $icon = 'fa-brands fa-php';

                                    } elseif (str_contains($skillName, 'laravel')) {
                                        $icon = 'fa-brands fa-laravel';

                                    } elseif (str_contains($skillName, 'bootstrap')) {
                                        $icon = 'fa-brands fa-bootstrap';

                                    } elseif (str_contains($skillName, 'html')) {
                                        $icon = 'fa-brands fa-html5';

                                    } elseif (str_contains($skillName, 'css')) {
                                        $icon = 'fa-brands fa-css3-alt';

                                    } elseif (str_contains($skillName, 'javascript')) {
                                        $icon = 'fa-brands fa-js';

                                    } elseif (str_contains($skillName, 'mysql')) {
                                        $icon = 'fa-solid fa-database';

                                    } elseif (str_contains($skillName, 'git')) {
                                        $icon = 'fa-brands fa-git-alt';
                                    }
                                @endphp

                                <i class="{{ $icon }}"></i>

                            </div>


                            {{-- CONTENT --}}
                            <div class="skill-content">

                                <div class="skill-heading">

                                    <h3>
                                        {{ $skill->name }}
                                    </h3>

                                    <span>
                                        {{ $skill->percentage }}%
                                    </span>

                                </div>


                                <div class="skill-progress">

                                    <div
                                        class="skill-progress-bar"
                                        style="--skill-width: {{ $skill->percentage }}%"
                                    ></div>

                                </div>


                                <div class="skill-level">
                                    <span>Proficiency</span>

                                    <span>
                                        {{ $skill->percentage >= 80 ? 'Advanced' : ($skill->percentage >= 60 ? 'Intermediate' : 'Basic') }}
                                    </span>
                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="skills-empty">

                            <div class="skills-empty-icon">
                                <i class="fa-solid fa-code"></i>
                            </div>

                            <p>
                                Belum ada skill yang ditambahkan.
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>


            {{-- =================================================
                RIGHT : DEVELOPER VISUAL
            ================================================== --}}

            <div class="skills-visual">

                {{-- ORBIT --}}
                <div class="skills-orbit skills-orbit-1"></div>
                <div class="skills-orbit skills-orbit-2"></div>
                <div class="skills-orbit skills-orbit-3"></div>


                {{-- CENTRAL CODE --}}
                <div class="skills-core">

                    <div class="skills-core-glow"></div>

                    <div class="skills-core-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <span>
                        WEB
                    </span>

                    <strong>
                        DEVELOPER
                    </strong>

                </div>


                {{-- FLOATING TECHNOLOGY BADGES --}}

                <div class="skills-tech-badge skills-tech-laravel">

                    <i class="fa-brands fa-laravel"></i>

                    <span>
                        Laravel
                    </span>

                </div>


                <div class="skills-tech-badge skills-tech-php">

                    <i class="fa-brands fa-php"></i>

                    <span>
                        PHP
                    </span>

                </div>


                <div class="skills-tech-badge skills-tech-mysql">

                    <i class="fa-solid fa-database"></i>

                    <span>
                        MySQL
                    </span>

                </div>


                <div class="skills-tech-badge skills-tech-bootstrap">

                    <i class="fa-brands fa-bootstrap"></i>

                    <span>
                        Bootstrap
                    </span>

                </div>


                <div class="skills-tech-badge skills-tech-git">

                    <i class="fa-brands fa-git-alt"></i>

                    <span>
                        Git
                    </span>

                </div>


                {{-- VISUAL LABEL --}}

                <div class="skills-visual-label">

                    <span></span>

                    <p>
                        Building with
                        <strong>modern technologies</strong>
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
            BOTTOM FEATURES
        ====================================================== --}}

        <div class="skills-features">

            {{-- FAST LEARNING --}}
            <div class="skills-feature">

                <div class="skills-feature-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div>
                    <strong>
                        Fast Learning
                    </strong>

                    <p>
                        Mudah beradaptasi dengan
                        teknologi baru.
                    </p>
                </div>

            </div>


            {{-- CLEAN CODE --}}
            <div class="skills-feature">

                <div class="skills-feature-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div>
                    <strong>
                        Clean Code
                    </strong>

                    <p>
                        Menulis kode yang rapi
                        dan mudah dipelihara.
                    </p>
                </div>

            </div>


            {{-- PROBLEM SOLVING --}}
            <div class="skills-feature">

                <div class="skills-feature-icon">
                    <i class="fa-regular fa-lightbulb"></i>
                </div>

                <div>
                    <strong>
                        Problem Solving
                    </strong>

                    <p>
                        Mencari solusi terbaik
                        untuk setiap tantangan.
                    </p>
                </div>

            </div>


            {{-- TEAMWORK --}}
            <div class="skills-feature">

                <div class="skills-feature-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div>
                    <strong>
                        Teamwork
                    </strong>

                    <p>
                        Bekerja sama untuk hasil
                        yang lebih baik.
                    </p>
                </div>

            </div>

        </div>


        {{-- =====================================================
            BOTTOM MESSAGE
        ====================================================== --}}

        <div class="skills-bottom">

            <div class="skills-bottom-icon">
                <i class="fa-solid fa-terminal"></i>
            </div>

            <div>

                <strong>
                    Always learning, always improving.
                </strong>

                <p>
                    Saya terus mengembangkan kemampuan dan mempelajari
                    teknologi baru untuk meningkatkan kualitas setiap
                    project.
                </p>

            </div>

        </div>

    </div>

</section>