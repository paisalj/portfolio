<section id="certificates" class="certificates-section">

    <div class="certificates-glow certificates-glow-1"></div>
    <div class="certificates-glow certificates-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
        <div class="certificates-header">

            <div class="section-label">
                <span></span>
                MY CERTIFICATES
            </div>

            <h2 class="certificates-title">
                Certifications & <span>Achievements</span>
            </h2>

            <p class="certificates-subtitle">
                Sertifikasi dan pencapaian yang mendukung kemampuan
                saya dalam bidang teknologi dan pengembangan web.
            </p>

        </div>


        {{-- CERTIFICATES LIST --}}
        <div class="certificates-grid">

            @forelse($certificates as $certificate)

                <article class="certificate-card">

                    {{-- IMAGE --}}
                    <div class="certificate-image">

                        @if($certificate->image)

                            <img
                                src="{{ asset('storage/' . $certificate->image) }}"
                                alt="{{ $certificate->name }}"
                            >

                        @else

                            <div class="certificate-image-placeholder">

                                <i class="fa-solid fa-certificate"></i>

                                <span>Certificate</span>

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

                                <span>
                                    {{ $certificate->issuer }}
                                </span>

                            </div>

                        @endif


                        @if($certificate->description)

                            <p class="certificate-description">
                                {{ $certificate->description }}
                            </p>

                        @endif


                        @if($certificate->certificate_number)

                            <div class="certificate-number">

                                <span>
                                    Credential ID
                                </span>

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
                                    View Credential

                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                            @else

                                <span class="certificate-verified">

                                    <i class="fa-solid fa-circle-check"></i>

                                    Verified Certificate

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

                    <h3>
                        No Certificates Yet
                    </h3>

                    <p>
                        Sertifikat yang ditambahkan melalui Admin
                        akan ditampilkan di sini.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>