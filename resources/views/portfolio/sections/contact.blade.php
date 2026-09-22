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
{{-- LEFT --}}
<div class="col-lg-5">

    <div class="contact-info-card">

        <div class="contact-card-label">
            GET IN TOUCH
        </div>

        <h3>
            Let's build
            <span>something great.</span>
        </h3>

        <p class="contact-info-description">
            Saya terbuka untuk peluang kerja, project,
            maupun kolaborasi dalam pengembangan aplikasi web.
            Jika memiliki ide atau peluang yang ingin didiskusikan,
            silakan kirimkan pesan melalui form di samping.
        </p>


        {{-- LOCATION --}}
        @if($about?->location)

            <div class="contact-info">

                <div class="contact-info-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <div>
                    <small>Location</small>
                    <strong>{{ $about->location }}</strong>
                </div>

            </div>

        @endif


        {{-- AVAILABLE FOR --}}
        <div class="contact-info">

            <div class="contact-info-icon">
                <i class="fa-solid fa-briefcase"></i>
            </div>

            <div>
                <small>Available for</small>
                <strong>Job Opportunities · Projects</strong>
            </div>

        </div>


        {{-- FOCUS --}}
        @if($about?->focus)

            <div class="contact-info">

                <div class="contact-info-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <div>
                    <small>Current Focus</small>
                    <strong>{{ $about->focus }}</strong>
                </div>

            </div>

        @endif


        {{-- BOTTOM CTA --}}
        <div class="contact-mini-cta">

            <div class="contact-mini-cta-icon">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>Open to new opportunities</span>
                <small>Let's start a conversation.</small>
            </div>

        </div>

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


                    {{-- SUCCESS MESSAGE --}}
                    @if(session('contact_success'))

                        <div class="contact-success-message">

                            <i class="fa-solid fa-circle-check"></i>

                            {{ session('contact_success') }}

                        </div>

                    @endif


                    {{-- VALIDATION ERROR --}}
                    @if($errors->any())

                        <div class="contact-error-message">

                            <i class="fa-solid fa-circle-exclamation"></i>

                            <div>

                                <strong>
                                    Pesan belum dapat dikirim.
                                </strong>

                                <ul>

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    @endif


                    {{-- CONTACT FORM --}}
                    <form
                        action="{{ route('contact.store') }}"
                        method="POST"
                        class="contact-form"
                    >

                        @csrf


                        {{-- NAME --}}
                        <div class="contact-form-group">

                            <label for="contact-name">
                                Nama
                            </label>

                            <input
                                type="text"
                                id="contact-name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama Anda"
                                required
                            >

                        </div>


                        {{-- EMAIL --}}
                        <div class="contact-form-group">

                            <label for="contact-email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                required
                            >

                        </div>


                        {{-- SUBJECT --}}
                        <div class="contact-form-group">

                            <label for="contact-subject">
                                Subject
                            </label>

                            <input
                                type="text"
                                id="contact-subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                placeholder="Contoh: Peluang kerja"
                            >

                        </div>


                        {{-- MESSAGE --}}
                        <div class="contact-form-group">

                            <label for="contact-message">
                                Pesan
                            </label>

                            <textarea
                                id="contact-message"
                                name="message"
                                rows="5"
                                placeholder="Tulis pesan Anda..."
                                required
                            >{{ old('message') }}</textarea>

                        </div>


                        {{-- SUBMIT --}}
                        <button
                            type="submit"
                            class="contact-main-button"
                        >

                            Kirim Pesan

                            <i class="fa-solid fa-paper-plane"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>