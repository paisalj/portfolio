<section id="projects" class="projects-section">

    {{-- =====================================================
        BACKGROUND
    ====================================================== --}}

    <div class="projects-grid-bg"></div>

    <div class="projects-glow projects-glow-1"></div>
    <div class="projects-glow projects-glow-2"></div>
    <div class="projects-glow projects-glow-3"></div>

    <div class="projects-orbit-bg projects-orbit-bg-1"></div>
    <div class="projects-orbit-bg projects-orbit-bg-2"></div>


    <div class="container position-relative">


        {{-- =====================================================
            HEADER
        ====================================================== --}}

        <div class="projects-header">

            <div class="section-label">
                <span></span>
                MY PROJECTS
            </div>

            <h2 class="projects-title">
                Some of My
                <span>Featured Projects</span>
            </h2>

            <p class="projects-subtitle">
                Beberapa project yang saya kerjakan untuk membangun
                aplikasi web yang modern, responsif, dan terstruktur.
            </p>

        </div>


        {{-- =====================================================
            MAIN PROJECT AREA
        ====================================================== --}}

        <div class="projects-main">


            {{-- =================================================
                LEFT : PROJECT CARDS
            ================================================== --}}

            <div class="projects-list">

                @forelse($projects as $project)

                    <article class="project-card">


                        {{-- PROJECT IMAGE --}}

                        <div class="project-image">

                            @if($project->image)

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                >

                            @else

                                <div class="project-placeholder">

                                    <i class="fa-solid fa-code"></i>

                                </div>

                            @endif


                            {{-- IMAGE OVERLAY --}}

                            <div class="project-image-overlay">

                                <span>
                                    PROJECT
                                </span>

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </div>


                            {{-- PROJECT NUMBER --}}

                            <div class="project-number">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </div>

                        </div>


                        {{-- PROJECT CONTENT --}}

                        <div class="project-content">


                            {{-- CATEGORY LABEL --}}

                            <div class="project-category">

                                <span></span>

                                FEATURED PROJECT

                            </div>


                            {{-- TITLE --}}

                            <h3 class="project-title">
                                {{ $project->title }}
                            </h3>


                            {{-- DESCRIPTION --}}

                            <p class="project-description">
                                {{ $project->description }}
                            </p>


                            {{-- TECHNOLOGIES --}}

                            @if($project->skills->count())

                                <div class="project-skills">

                                    @foreach($project->skills as $skill)

                                        <span class="project-skill">
                                            {{ $skill->name }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif


                            {{-- LINKS --}}

                            <div class="project-links">

                                @if($project->github_url)

                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="project-link project-link-github"
                                    >
                                        <i class="fa-brands fa-github"></i>

                                        <span>
                                            GitHub
                                        </span>

                                        <i class="fa-solid fa-arrow-up-right-from-square project-link-arrow"></i>

                                    </a>

                                @endif


                                @if($project->demo_url)

                                    <a
                                        href="{{ $project->demo_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="project-link project-link-demo"
                                    >
                                        <span>
                                            Live Demo
                                        </span>

                                        <i class="fa-solid fa-arrow-right"></i>

                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                @empty


                    {{-- EMPTY STATE --}}

                    <div class="projects-empty">

                        <div class="projects-empty-icon">
                            <i class="fa-solid fa-folder-open"></i>
                        </div>

                        <h3>
                            No Projects Yet
                        </h3>

                        <p>
                            Project yang ditambahkan akan ditampilkan di sini.
                        </p>

                    </div>

                @endforelse

            </div>


            {{-- =================================================
                RIGHT : DEVELOPER PROJECT VISUAL
            ================================================== --}}

            <div class="projects-visual">


                {{-- DECORATIVE ORBITS --}}

                <div class="projects-visual-orbit projects-visual-orbit-1"></div>
                <div class="projects-visual-orbit projects-visual-orbit-2"></div>
                <div class="projects-visual-orbit projects-visual-orbit-3"></div>


                {{-- CODE WINDOW --}}

                <div class="projects-code-window">


                    {{-- WINDOW HEADER --}}

                    <div class="projects-code-header">

                        <div class="projects-code-dots">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>

                        <span class="projects-code-title">
                            portfolio.dev
                        </span>

                    </div>


                    {{-- CODE CONTENT --}}

                    <div class="projects-code-body">

                        <div>
                            <span class="code-number">01</span>

                            <span class="code-purple">
                                const
                            </span>

                            <span class="code-white">
                                project
                            </span>

                            <span class="code-gold">
                                =
                            </span>

                            <span class="code-blue">
                                {
                            </span>
                        </div>


                        <div class="code-indent">

                            <span class="code-white">
                                design:
                            </span>

                            <span class="code-green">
                                "clean"
                            </span>

                            <span class="code-white">
                                ,
                            </span>

                        </div>


                        <div class="code-indent">

                            <span class="code-white">
                                responsive:
                            </span>

                            <span class="code-gold">
                                true
                            </span>

                            <span class="code-white">
                                ,
                            </span>

                        </div>


                        <div class="code-indent">

                            <span class="code-white">
                                technology:
                            </span>

                            <span class="code-green">
                                "Laravel"
                            </span>

                        </div>


                        <div>

                            <span class="code-blue">
                                };
                            </span>

                        </div>


                        <div class="projects-code-cursor"></div>

                    </div>

                </div>


                {{-- CENTRAL PROJECT ICON --}}

                <div class="projects-visual-core">

                    <div class="projects-core-glow"></div>

                    <div class="projects-core-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <span>
                        BUILD
                    </span>

                    <strong>
                        PROJECTS
                    </strong>

                </div>


                {{-- FLOATING TECHNOLOGY BADGES --}}

                <div class="projects-tech projects-tech-laravel">

                    <i class="fa-brands fa-laravel"></i>

                    <span>
                        Laravel
                    </span>

                </div>


                <div class="projects-tech projects-tech-php">

                    <i class="fa-brands fa-php"></i>

                    <span>
                        PHP
                    </span>

                </div>


                <div class="projects-tech projects-tech-mysql">

                    <i class="fa-solid fa-database"></i>

                    <span>
                        MySQL
                    </span>

                </div>


                <div class="projects-tech projects-tech-bootstrap">

                    <i class="fa-brands fa-bootstrap"></i>

                    <span>
                        Bootstrap
                    </span>

                </div>


                {{-- VISUAL LABEL --}}

                <div class="projects-visual-label">

                    <span></span>

                    <p>
                        Turning ideas into
                        <strong>real applications</strong>
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
            PROJECT PROCESS
        ====================================================== --}}

        <div class="projects-process">


            {{-- PROCESS ITEM 1 --}}

            <div class="projects-process-item">

                <div class="projects-process-icon">
                    <i class="fa-solid fa-pen-ruler"></i>
                </div>

                <div>

                    <span>
                        01
                    </span>

                    <strong>
                        Design
                    </strong>

                    <p>
                        Merancang tampilan dan
                        pengalaman pengguna.
                    </p>

                </div>

            </div>


            {{-- CONNECTOR --}}

            <div class="projects-process-line"></div>


            {{-- PROCESS ITEM 2 --}}

            <div class="projects-process-item">

                <div class="projects-process-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div>

                    <span>
                        02
                    </span>

                    <strong>
                        Develop
                    </strong>

                    <p>
                        Membangun aplikasi dengan
                        teknologi yang sesuai.
                    </p>

                </div>

            </div>


            {{-- CONNECTOR --}}

            <div class="projects-process-line"></div>


            {{-- PROCESS ITEM 3 --}}

            <div class="projects-process-item">

                <div class="projects-process-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>

                <div>

                    <span>
                        03
                    </span>

                    <strong>
                        Deploy
                    </strong>

                    <p>
                        Menguji dan menyiapkan
                        aplikasi untuk digunakan.
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
            BOTTOM MESSAGE
        ====================================================== --}}

        <div class="projects-bottom">

            <div class="projects-bottom-icon">
                <i class="fa-solid fa-terminal"></i>
            </div>

            <div>

                <strong>
                    From idea to working product.
                </strong>

                <p>
                    Setiap project menjadi kesempatan untuk
                    belajar, berkembang, dan menghasilkan solusi.
                </p>

            </div>

        </div>

    </div>

</section>