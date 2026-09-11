<section id="skills" class="skills-section">

    <div class="skills-glow skills-glow-1"></div>
    <div class="skills-glow skills-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
        <div class="skills-header text-center">

            <div class="section-label justify-content-center">
                <span></span>
                MY SKILLS
                <span></span>
            </div>

            <h2 class="skills-title">
                Technologies I <span>work with</span>
            </h2>

            <p class="skills-subtitle">
                Tools and technologies that I use to build modern
                and responsive web applications.
            </p>

        </div>


        {{-- SKILLS --}}
        <div class="row g-4 mt-4">

            @forelse($skills as $skill)

                <div class="col-12 col-md-6 col-lg-4">

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


                        {{-- NAME --}}
                        <div class="skill-content">

                            <div class="skill-heading">

                                <h3>
                                    {{ $skill->name }}
                                </h3>

                                <span>
                                    {{ $skill->percentage }}%
                                </span>

                            </div>


                            {{-- PROGRESS --}}
                            <div class="skill-progress">

                                <div
                                    class="skill-progress-bar"
                                    style="width: {{ $skill->percentage }}%"
                                ></div>

                            </div>


                            <p>
                                Proficiency level
                            </p>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">

                    <p class="text-secondary">
                        No skills available.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- BOTTOM MESSAGE --}}
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