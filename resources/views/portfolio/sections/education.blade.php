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
                Latar belakang pendidikan dan bidang yang menjadi dasar
                perjalanan saya di dunia teknologi.
            </p>

        </div>


        {{-- EDUCATION LIST --}}
        <div class="education-list">

            @forelse($educations as $education)

                <div class="education-card">

                    {{-- ICON --}}
                    <div class="education-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>


                    {{-- CONTENT --}}
                    <div class="education-content">

                        <div class="education-top">

                            <span class="education-label">
                                EDUCATION
                            </span>

                            @if($education->start_date || $education->end_date)

                                <span class="education-period">

                                    @if($education->start_date)
                                        {{ $education->start_date?->format('Y') }}
                                    @endif

                                    @if($education->end_date)
                                        -
                                        {{ $education->end_date?->format('Y') }}
                                    @endif

                                </span>

                            @endif

                        </div>


                        <h3>
                            {{ $education->institution }}
                        </h3>


                        @if($education->degree)

                            <h4>
                                {{ $education->degree }}
                            </h4>

                        @endif


                        @if($education->field_of_study)

                            <p>
                                <i class="fa-solid fa-book-open"></i>

                                {{ $education->field_of_study }}
                            </p>

                        @endif

                    </div>

                </div>

            @empty

                <div class="education-empty">

                    <i class="fa-solid fa-graduation-cap"></i>

                    <h3>
                        No Education Yet
                    </h3>

                    <p>
                        Data pendidikan yang ditambahkan akan
                        ditampilkan di bagian ini.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- BOTTOM --}}
        <div class="education-bottom">

            <i class="fa-solid fa-code"></i>

            <span>
                Learning today, building tomorrow.
            </span>

        </div>

    </div>

</section>