<section id="experience" class="experience-section">

    <div class="experience-glow experience-glow-1"></div>
    <div class="experience-glow experience-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
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
                dalam pengembangan aplikasi dan bekerja dalam tim.
            </p>

        </div>


        {{-- EXPERIENCE LIST --}}
        <div class="experience-list">

            @forelse($experiences as $experience)

                <div class="experience-item">

                    {{-- TIMELINE --}}
                    <div class="experience-timeline">

                        <div class="experience-dot"></div>

                        @if(!$loop->last)
                            <div class="experience-line"></div>
                        @endif

                    </div>


                    {{-- DATE --}}
                    <div class="experience-date">

                        <span>
                            {{ $experience->start_date?->format('M Y') }}
                        </span>

                        <strong>
                            @if($experience->is_current)
                                Present
                            @else
                                {{ $experience->end_date?->format('M Y') }}
                            @endif
                        </strong>

                    </div>


                    {{-- CONTENT --}}
                    <div class="experience-card">

                        <div class="experience-card-header">

                            <div>

                                <h3>
                                    {{ $experience->position }}
                                </h3>

                                <h4>
                                    {{ $experience->company }}
                                </h4>

                            </div>

                            @if($experience->location)

                                <span class="experience-location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $experience->location }}
                                </span>

                            @endif

                        </div>


                        @if($experience->description)

                            <p>
                                {{ $experience->description }}
                            </p>

                        @endif

                        <div class="experience-badge">

                            <i class="fa-solid fa-briefcase"></i>

                            Professional Experience

                        </div>

                    </div>

                </div>

            @empty

                <div class="experience-empty">

                    <i class="fa-solid fa-briefcase"></i>

                    <h3>
                        No Experience Yet
                    </h3>

                    <p>
                        Pengalaman yang ditambahkan akan ditampilkan
                        di bagian ini.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>