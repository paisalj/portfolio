```blade
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
                    MY CERTIFICATES
                </div>

                <h2 class="certificates-title">
                    My
                    <span>Certificates</span>
                </h2>

                <p class="certificates-subtitle">
                    Kumpulan sertifikat dan pencapaian yang telah
                    saya peroleh sebagai bukti kompetensi dan komitmen
                    dalam pengembangan keahlian di bidang teknologi
                    dan pengembangan web.
                </p>

                <div class="certificates-hero-actions">

                    <a href="#certificate-list" class="certificates-btn certificates-btn-primary">
                        <i class="fa-solid fa-award"></i>
                        Lihat Semua
                    </a>

                    @if(isset($home) && $home?->cv_file)
                        <a
                            href="{{ asset($home->cv_file) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="certificates-btn certificates-btn-outline"
                        >
                            <i class="fa-solid fa-download"></i>
                            Download CV
                        </a>
                    @endif

                </div>

            </div>

            {{-- CERTIFICATE VISUAL --}}
            <div class="certificates-hero-visual">

                <div class="certificates-visual-orbit certificates-visual-orbit-1"></div>
                <div class="certificates-visual-orbit certificates-visual-orbit-2"></div>
                <div class="certificates-visual-orbit certificates-visual-orbit-3"></div>

                <div class="certificates-visual-glow"></div>

                <div class="certificates-pedestal">

                    <div class="certificates-pedestal-top"></div>
                    <div class="certificates-pedestal-middle"></div>
                    <div class="certificates-pedestal-base"></div>

                </div>

                <div class="certificates-hero-document">

                    <div class="certificates-document-inner">

                        <div class="certificates-document-seal">
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <span class="certificates-document-small">
                            CERTIFICATE
                        </span>

                        <strong>OF ACHIEVEMENT</strong>

                        <div class="certificates-document-line"></div>

                        <div class="certificates-document-ribbon">
                            <i class="fa-solid fa-award"></i>
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
                    <i class="fa-solid fa-award"></i>
                </div>

            </div>

        </div>


        {{-- CERTIFICATE STATISTICS --}}
        <div class="certificates-stats">

            <div class="certificates-stat">

                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-award"></i>
                </div>

                <div class="certificates-stat-content">
                    <strong>{{ $certificates->count() }}+</strong>
                    <span>Total Certificates</span>
                </div>

            </div>

            <div class="certificates-stat">

                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <div class="certificates-stat-content">
                    <strong>{{ $certificates->pluck('issuer')->filter()->unique()->count() }}+</strong>
                    <span>Issuing Institutions</span>
                </div>

            </div>

            <div class="certificates-stat">

                <div class="certificates-stat-icon">
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="certificates-stat-content">
                    <strong>100%</strong>
                    <span>Commitment to Learning</span>
                </div>

            </div>

        </div>


        {{-- CERTIFICATE LIST --}}
        <div id="certificate-list" class="certificates-list-section">

            <div class="certificates-list-header">

                <div>
                    <div class="certificates-list-label">
                        <span></span>
                        MY ACHIEVEMENTS
                    </div>

                    <h2 class="certificates-list-title">
                        All <span>Certificates</span>
                    </h2>

                    <p class="certificates-list-subtitle">
                        Sertifikat yang mendukung perjalanan saya
                        dalam belajar dan mengembangkan kemampuan.
                    </p>
                </div>

                <div class="certificates-list-count">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>{{ $certificates->count() }} Certificates</span>
                </div>

            </div>


            {{-- CERTIFICATE GRID --}}
            <div class="certificates-grid">

                @forelse($certificates as $certificate)

                    <article class="certificate-card">

                        {{-- IMAGE --}}
                        <div class="certificate-image">

                            @if($certificate->image)

                                <img
                                    src="{{ asset('storage/' . $certificate->image) }}"
                                    alt="Sertifikat {{ $certificate->name }}"
                                    loading="lazy"
                                >

                            @else

                                <div class="certificate-image-placeholder">

                                    <div class="certificate-placeholder-icon">
                                        <i class="fa-solid fa-certificate"></i>
                                    </div>

                                    <span>CERTIFICATE</span>

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


                            <h3>
                                {{ $certificate->name }}
                            </h3>


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

                                    <strong>
                                        {{ $certificate->certificate_number }}
                                    </strong>

                                </div>

                            @endif


                            {{-- FOOTER --}}
                            <div class="certificate-footer">

                                @if($certificate->credential_url)

                                    <a
                                        href="{{ $certificate->credential_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="certificate-link"
                                    >
                                        View Certificate
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>

                                @else

                                    <span class="certificate-verified">
                                        <i class="fa-solid fa-circle-check"></i>
                                        Certificate
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
                <i class="fa-solid fa-trophy"></i>
            </div>

            <div class="certificates-bottom-content">

                <strong>
                    Continuous Learning, Continuous Growth.
                </strong>

                <p>
                    Saya terus belajar dan mengembangkan keterampilan
                    melalui berbagai pelatihan dan sertifikasi.
                </p>

            </div>

            <div class="certificates-bottom-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>

    </div>

</section>
```
