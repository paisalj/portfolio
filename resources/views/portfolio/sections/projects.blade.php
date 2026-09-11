<section id="projects" class="projects-section">

    <div class="projects-glow projects-glow-1"></div>
    <div class="projects-glow projects-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
        <div class="projects-header">

            <div class="section-label">
                <span></span>
                MY PROJECTS
            </div>

            <h2 class="projects-title">
                Featured <span>Projects</span>
            </h2>

            <p class="projects-subtitle">
                Beberapa project yang saya kerjakan menggunakan berbagai
                teknologi web development.
            </p>

        </div>


        {{-- PROJECT LIST --}}
        <div class="row g-4 mt-4">

            @forelse($projects as $project)

                <div class="col-12 col-md-6 col-lg-4">

                    <article class="project-card">

                        {{-- IMAGE --}}
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

                            <div class="project-overlay">

                                <span>
                                    Project
                                </span>

                            </div>

                        </div>


                        {{-- CONTENT --}}
                        <div class="project-content">

                            <div class="project-number">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <h3>
                                {{ $project->title }}
                            </h3>

                            <p>
                                {{ $project->description }}
                            </p>


                            {{-- SKILLS --}}
                            @if($project->skills->count())

                                <div class="project-skills">

                                    @foreach($project->skills as $skill)

                                        <span>
                                            {{ $skill->name }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif


                            {{-- BUTTON --}}
                            <div class="project-links">

                                @if($project->github_url)

                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <i class="fa-brands fa-github"></i>
                                        GitHub
                                    </a>

                                @endif


                                @if($project->demo_url)

                                    <a
                                        href="{{ $project->demo_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="project-demo"
                                    >
                                        Live Demo
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                </div>

            @empty

                <div class="col-12">

                    <div class="projects-empty">

                        <i class="fa-solid fa-folder-open"></i>

                        <h3>
                            No Projects Yet
                        </h3>

                        <p>
                            Project yang ditambahkan akan ditampilkan di sini.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>