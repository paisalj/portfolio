<section id="experience" class="experience-section">

    <div class="experience-glow experience-glow-1"></div>
    <div class="experience-glow experience-glow-2"></div>

    <div class="container position-relative">

        {{-- =========================================
            HEADER
        ========================================== --}}
        <div class="experience-header">

            <div class="section-label">
                <span></span>
                MY EXPERIENCE
            </div>

            <h2 class="experience-title">
                Where I've <span>worked</span>
            </h2>

            <p class="experience-subtitle">
                Pengalaman yang membantu saya mengembangkan kemampuan
                dalam pengembangan aplikasi web, pemecahan masalah,
                dan bekerja dalam tim.
            </p>

        </div>


        {{-- =========================================
            EXPERIENCE LIST
        ========================================== --}}
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


                    {{-- PERIOD --}}
                    <div class="experience-period">

                        <span class="experience-period-start">
                            {{ $experience->start_date?->format('M Y') ?? '-' }}
                        </span>

                        <span class="experience-period-separator">
                            —
                        </span>

                        <span class="experience-period-end">

                            @if($experience->is_current)

                                Present

                            @else

                                {{ $experience->end_date?->format('M Y') ?? '-' }}

                            @endif

                        </span>

                    </div>


                    {{-- EXPERIENCE CARD --}}
                    <div class="experience-card">

                        {{-- CARD TOP --}}
                        <div class="experience-card-top">

                            <div class="experience-card-heading">

                                <span class="experience-card-label">
                                    PROFESSIONAL EXPERIENCE
                                </span>

                                <h3>
                                    {{ $experience->position }}
                                </h3>

                                <h4>
                                    {{ $experience->company }}
                                </h4>

                            </div>


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


                        {{-- DESCRIPTION --}}
                        @if($experience->description)

                            <div class="experience-description">

                                <p>
                                    {{ $experience->description }}
                                </p>

                            </div>

                        @endif


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

                            <div class="experience-icon">

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

    </div>

</section>