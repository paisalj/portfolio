<section id="education" class="education-section">

    <div class="education-glow education-glow-1"></div>
    <div class="education-glow education-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
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


        {{-- EDUCATION TIMELINE --}}
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
                                Education Completed
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


        {{-- BOTTOM --}}
        <div class="education-bottom">

            <div class="education-bottom-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <span>
                Learning today, building tomorrow.
            </span>

        </div>

    </div>

</section>