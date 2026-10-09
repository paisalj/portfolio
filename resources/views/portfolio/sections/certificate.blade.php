
<section id="certificates" class="certificates-section">

    {{-- BACKGROUND --}}
    <div class="certificates-grid-bg"></div>
    <div class="certificates-glow certificates-glow-1"></div>
    <div class="certificates-glow certificates-glow-2"></div>
    <div class="certificates-orbit certificates-orbit-1"></div>
    <div class="certificates-orbit certificates-orbit-2"></div>

    <div class="container position-relative">

        {{-- HERO --}}
        <div class="certificates-hero">

            <div class="certificates-hero-content">

                <div class="section-label">
                    <span></span>
                    MY ACHIEVEMENTS
                </div>

                <h2 class="certificates-title">
                    All <span>Certificates</span>
                </h2>

                <p class="certificates-subtitle">
                    Sertifikat yang mendukung perjalanan saya dalam
                    belajar, mengembangkan kemampuan, dan membangun
                    aplikasi web.
                </p>

                <div class="certificates-hero-actions">
                    <a href="#certificate-list"
                       class="certificates-btn certificates-btn-primary">
                        <i class="fa-solid fa-award"></i>
                        Explore Certificates
                    </a>

                    <a href="#about"
                       class="certificates-btn certificates-btn-outline">
                        <i class="fa-solid fa-user"></i>
                        About Me
                    </a>
                </div>

            </div>

            {{-- DECORATIVE CERTIFICATE VISUAL --}}
            <div class="certificates-hero-visual">

                <div class="certificates-visual-glow"></div>

                <div class="certificates-visual-orbit certificates-visual-orbit-1"></div>
                <div class="certificates-visual-orbit certificates-visual-orbit-2"></div>
                <div class="certificates-visual-orbit certificates-visual-orbit-3"></div>

                <div class="certificates-pedestal">
                    <div class="certificates-pedestal-top"></div>
                    <div class="certificates-pedestal-middle"></div>
                    <div class="certificates-pedestal-base"></div>
                </div>

                <div class="certificates-hero-document">
                    <div class="certificates-document-inner">

                        <div class="certificates-document-seal">
                            <i class="fa-solid fa-award"></i>
                        </div>

                        <span class="certificates-document-small">
                            CERTIFICATE
                        </span>

                        <strong>OF ACHIEVEMENT</strong>

                        <div class="certificates-document-line"></div>
                        <div class="certificates-document-line"></div>

                        <div class="certificates-document-ribbon">
                            <i class="fa-solid fa-certificate"></i>
                        </div>

                    </div>
                </div>

                <div class="certificates-floating-icon certificates-floating-cap">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>

                <div class="certificates-floating-icon certificates-floating-code">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div class="certificates-floating-icon certificates-floating-award">
                    <i class="fa-solid fa-trophy"></i>
                </div>

            </div>

        </div>

        {{-- STATS --}}
        <div class="certificates-stats">

            <div class="certificates-stat">
                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <div class="certificates-stat-content">
                    <strong>{{ $certificates->count() }}</strong>
                    <span>Total Certificates</span>
                </div>
            </div>

            <div class="certificates-stat">
                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="certificates-stat-content">
                    <strong>{{ $certificates->pluck('issuer')->filter()->unique()->count() }}</strong>
                    <span>Certificate Issuers</span>
                </div>
            </div>

            <div class="certificates-stat">
                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="certificates-stat-content">
                    <strong>100%</strong>
                    <span>Commitment to Learning</span>
                </div>
            </div>

        </div>

        {{-- CERTIFICATE LIST --}}
        <div class="certificates-list-section" id="certificate-list">

            <div class="certificates-list-header">

                <div>
                    <div class="certificates-list-label">
                        <span></span>
                        MY COLLECTION
                    </div>

                    <h2 class="certificates-list-title">
                        Learning & <span>Achievements</span>
                    </h2>

                    <p class="certificates-list-subtitle">
                        Kumpulan sertifikat yang menjadi bagian
                        dari perjalanan belajar dan pengembangan
                        kemampuan saya.
                    </p>
                </div>

                <div class="certificates-list-count">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>{{ $certificates->count() }} Certificates</span>
                </div>

            </div>

            {{-- FILTERS --}}
            <div class="certificates-filters" role="group"
                 aria-label="Filter certificates">

                <button type="button"
                        class="certificate-filter active"
                        data-filter="all">
                    <i class="fa-solid fa-border-all"></i>
                    All Certificates
                </button>

                @foreach($certificates->pluck('issuer')->filter()->unique()->values() as $issuer)

                    <button type="button"
                            class="certificate-filter"
                            data-filter="issuer-{{ $loop->index }}">
                        {{ $issuer }}
                    </button>

                @endforeach

            </div>

            {{-- CARDS --}}
            <div class="certificates-grid">

                @forelse($certificates as $certificate)

                    @php
                        $issuerIndex = $certificate->issuer
                            ? $certificates->pluck('issuer')
                                ->filter()
                                ->unique()
                                ->values()
                                ->search($certificate->issuer)
                            : false;
                    @endphp

                    <article class="certificate-card"
                             data-issuer="{{ $issuerIndex !== false ? 'issuer-' . $issuerIndex : 'other' }}">

                        {{-- IMAGE --}}
                        <div class="certificate-image">

                            @if($certificate->image)

                                <img
                                    src="{{ asset('storage/' . $certificate->image) }}"
                                    alt="{{ $certificate->name }}"
                                    loading="lazy"
                                >

                            @else

                                <div class="certificate-image-placeholder">

                                    <div class="certificate-placeholder-icon">
                                        <i class="fa-solid fa-certificate"></i>
                                    </div>

                                    <span>ACHIEVEMENT</span>

                                    <strong>{{ $certificate->name }}</strong>

                                </div>

                            @endif

                            <div class="certificate-image-overlay"></div>

                        </div>

                        {{-- CONTENT --}}
                        <div class="certificate-content">

                            <div class="certificate-top">

                                <span class="certificate-label">
                                    CERTIFICATE
                                </span>

                                @if($certificate->issue_date)
                                    <span class="certificate-date">
                                        {{ $certificate->issue_date->format('M Y') }}
                                    </span>
                                @endif

                            </div>

                            <h3>{{ $certificate->name }}</h3>

                            @if($certificate->issuer)
                                <div class="certificate-issuer">
                                    <i class="fa-solid fa-building-columns"></i>
                                    <span>{{ $certificate->issuer }}</span>
                                </div>
                            @endif

                            @if($certificate->description)
                                <p class="certificate-description">
                                    {{ $certificate->description }}
                                </p>
                            @endif

                            @if($certificate->certificate_number)
                                <div class="certificate-number">
                                    <span>Credential ID</span>
                                    <strong>{{ $certificate->certificate_number }}</strong>
                                </div>
                            @endif

                            <div class="certificate-footer">

                                @if($certificate->credential_url)
                                    <a href="{{ $certificate->credential_url }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="certificate-link">
                                        View Credential
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                @else
                                    <span class="certificate-verified">
                                        <i class="fa-solid fa-circle-check"></i>
                                        Certificate Added
                                    </span>
                                @endif

                                <div class="certificate-icon">
                                    <i class="fa-solid fa-award"></i>
                                </div>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="certificate-empty">

                        <div class="certificate-empty-icon">
                            <i class="fa-solid fa-certificate"></i>
                        </div>

                        <h3>No Certificates Yet</h3>

                        <p>
                            Sertifikat yang ditambahkan melalui Admin
                            akan ditampilkan di sini.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

        {{-- BOTTOM BANNER --}}
        <div class="certificates-bottom">

            <div class="certificates-bottom-icon">
                <i class="fa-solid fa-lightbulb"></i>
            </div>

            <div class="certificates-bottom-content">
                <strong>Learning today, building tomorrow.</strong>
                <p>
                    Saya terus belajar dan mengembangkan kemampuan
                    untuk menjadi web developer yang lebih baik.
                </p>
            </div>

            <div class="certificates-bottom-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>

    </div>

</section>

{{-- CERTIFICATE FILTER SCRIPT --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.certificate-filter');
    const certificateCards = document.querySelectorAll('.certificate-card');

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const selectedFilter = this.dataset.filter;

            filterButtons.forEach(function (item) {
                item.classList.remove('active');
            });

            this.classList.add('active');

            certificateCards.forEach(function (card) {
                const matches = selectedFilter === 'all'
                    || card.dataset.issuer === selectedFilter;

                card.hidden = !matches;
            });
        });
    });
});
</script>
