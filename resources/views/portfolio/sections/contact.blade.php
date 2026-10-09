```blade
<section id="contact" class="contact-section">

    <div class="contact-grid-bg"></div>
    <div class="contact-glow contact-glow-1"></div>
    <div class="contact-glow contact-glow-2"></div>
    <div class="contact-orbit contact-orbit-1"></div>
    <div class="contact-orbit contact-orbit-2"></div>

    <div class="container position-relative contact-container">

        {{-- HEADER --}}
        <div class="contact-header">

            <div class="section-label">
                <span></span>
                GET IN TOUCH
            </div>

            <h2 class="contact-title">
                Contact <span>Me</span>
            </h2>

            <p class="contact-subtitle">
                Jika Anda memiliki pertanyaan, saran, atau ingin
                bekerja sama, jangan ragu untuk menghubungi saya.
                Saya akan dengan senang hati membantu.
            </p>

        </div>

        {{-- CONTACT LAYOUT --}}
        <div class="contact-layout">

            {{-- CONTACT FORM --}}
            <div class="contact-form-panel">

                @if(session('contact_success'))
                    <div class="contact-success-message">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ session('contact_success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="contact-error-message">
                        <i class="fa-solid fa-circle-exclamation"></i>

                        <div>
                            <strong>Pesan belum dapat dikirim.</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="contact-form"
                >
                    @csrf

                    <div class="contact-form-row">

                        {{-- NAME --}}
                        <div class="contact-form-group">
                            <label for="contact-name">
                                <i class="fa-solid fa-user"></i>
                                Nama Lengkap <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="contact-name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                autocomplete="name"
                                required
                            >
                        </div>

                        {{-- EMAIL --}}
                        <div class="contact-form-group">
                            <label for="contact-email">
                                <i class="fa-solid fa-envelope"></i>
                                Email <span>*</span>
                            </label>

                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email Anda"
                                autocomplete="email"
                                required
                            >
                        </div>

                    </div>

                    {{-- SUBJECT --}}
                    <div class="contact-form-group">
                        <label for="contact-subject">
                            <i class="fa-solid fa-list"></i>
                            Subjek
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
                            <i class="fa-regular fa-message"></i>
                            Pesan <span>*</span>
                        </label>

                        <textarea
                            id="contact-message"
                            name="message"
                            rows="5"
                            placeholder="Tuliskan pesan Anda di sini..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>

                    {{-- SUBMIT --}}
                    <button type="submit" class="contact-main-button">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Kirim Pesan</span>
                    </button>

                </form>

            </div>

            {{-- CONTACT DETAILS --}}
            <div class="contact-details-column">

                <div class="contact-details-card">

                    {{-- EMAIL --}}
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="contact-detail-text">
                            <small>Email</small>

                            @if($about?->email)
                                <a href="mailto:{{ $about->email }}">
                                    {{ $about->email }}
                                </a>
                                <span>Kirim email kapan saja</span>
                            @else
                                <strong>Hubungi saya melalui form</strong>
                            @endif
                        </div>
                    </div>

                    {{-- PHONE --}}
                    @if($about?->phone)
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div class="contact-detail-text">
                                <small>Telepon</small>

                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $about->phone) }}">
                                    {{ $about->phone }}
                                </a>

                                <span>Silakan hubungi saya</span>
                            </div>
                        </div>
                    @endif

                    {{-- LOCATION --}}
                    @if($about?->location)
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div class="contact-detail-text">
                                <small>Lokasi</small>
                                <strong>{{ $about->location }}</strong>
                                <span>Indonesia</span>
                            </div>
                        </div>
                    @endif

                </div>

                {{-- SOCIAL LINKS --}}
                <div class="contact-socials">

                    @if($about?->github)
                        <a
                            href="{{ $about->github }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="GitHub"
                            title="GitHub"
                        >
                            <i class="fa-brands fa-github"></i>
                        </a>
                    @endif

                    @if($about?->linkedin)
                        <a
                            href="{{ $about->linkedin }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn"
                            title="LinkedIn"
                        >
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    @endif

                    @if($about?->instagram)
                        <a
                            href="{{ $about->instagram }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                            title="Instagram"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    @endif

                </div>

            </div>

            {{-- DECORATIVE ENVELOPE --}}
            <div class="contact-visual" aria-hidden="true">

                <div class="contact-visual-orbit contact-visual-orbit-1"></div>
                <div class="contact-visual-orbit contact-visual-orbit-2"></div>

                <div class="contact-floating-icon contact-floating-mail">
                    <i class="fa-regular fa-envelope"></i>
                </div>

                <div class="contact-floating-icon contact-floating-chat">
                    <i class="fa-regular fa-comment-dots"></i>
                </div>

                <div class="contact-envelope-scene">

                    <div class="contact-envelope-shadow"></div>

                    <div class="contact-envelope">
                        <div class="contact-envelope-back"></div>
                        <div class="contact-envelope-paper">
                            <i class="fa-solid fa-at"></i>
                        </div>
                        <div class="contact-envelope-flap"></div>
                        <div class="contact-envelope-front"></div>
                    </div>

                    <div class="contact-envelope-platform">
                        <span></span>
                    </div>

                    <div class="contact-envelope-spark contact-spark-1"></div>
                    <div class="contact-envelope-spark contact-spark-2"></div>
                    <div class="contact-envelope-spark contact-spark-3"></div>

                </div>

                <div class="contact-visual-caption">
                    <span></span>
                    LET'S CONNECT
                    <span></span>
                </div>

            </div>

        </div>

    </div>

</section>
```
