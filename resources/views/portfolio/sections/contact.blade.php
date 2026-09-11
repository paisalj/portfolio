<section id="contact" class="contact-section">

    <div class="contact-glow contact-glow-1"></div>
    <div class="contact-glow contact-glow-2"></div>

    <div class="container position-relative">

        {{-- HEADER --}}
        <div class="contact-header">

            <div class="section-label">
                <span></span>
                GET IN TOUCH
            </div>

            <h2 class="contact-title">
                Let's <span>work together.</span>
            </h2>

            <p class="contact-subtitle">
                Saya terbuka untuk peluang kerja, project, maupun
                kolaborasi dalam pengembangan aplikasi web.
            </p>

        </div>


        {{-- CONTACT CONTENT --}}
        <div class="row g-4 align-items-stretch">

            {{-- LEFT --}}
            <div class="col-lg-5">

                <div class="contact-info-card">

                    <div class="contact-card-label">
                        CONTACT INFORMATION
                    </div>

                    <h3>
                        Have a project<br>
                        <span>in mind?</span>
                    </h3>

                    <p>
                        Jangan ragu untuk menghubungi saya.
                        Saya akan dengan senang hati berdiskusi
                        mengenai project atau peluang yang tersedia.
                    </p>


                    {{-- EMAIL --}}
                    @if($profile->email)

                        <a
                            href="mailto:{{ $profile->email }}"
                            class="contact-info"
                        >

                            <div class="contact-info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <small>Email</small>
                                <strong>{{ $profile->email }}</strong>
                            </div>

                        </a>

                    @endif


                    {{-- LOCATION --}}
                    @if($profile->location)

                        <div class="contact-info">

                            <div class="contact-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <small>Location</small>
                                <strong>{{ $profile->location }}</strong>
                            </div>

                        </div>

                    @endif

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="col-lg-7">

                <div class="contact-action-card">

                    <div class="contact-action-icon">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>

                    <h3>
                        Let's start a conversation
                    </h3>

                    <p>
                        Punya pertanyaan, ide project, atau peluang
                        kerja? Kirimkan pesan dan mari kita berdiskusi.
                    </p>


                    @if($profile->email)

                        <a
                            href="mailto:{{ $profile->email }}"
                            class="contact-main-button"
                        >
                            Send Me an Email

                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>