@extends('admin.layouts.app')

@section('admin-title', 'Edit About')

@section('admin-content')

<div class="admin-about-edit-page">

    {{-- OUTER CONTAINER --}}
    <div class="admin-about-edit-container">

        {{-- PAGE HEADER --}}
        <div class="admin-about-edit-header">

            <div>
                <span class="admin-about-edit-eyebrow">
                    Portfolio Management
                </span>

                <h1>
                    Edit About
                </h1>

                <p>
                    Kelola informasi tentang diri dan profil profesional
                    yang tampil pada halaman About portfolio.
                </p>
            </div>

            <a
                href="{{ route('admin.about') }}"
                class="admin-about-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-about-edit-alert admin-about-edit-alert-error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    <strong>
                        Periksa kembali data yang dimasukkan.
                    </strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        @endif


        {{-- FORM CARD --}}
        <div class="admin-about-edit-card">

            {{-- CARD HEADER --}}
            <div class="admin-about-edit-card-header">

                <div class="admin-about-edit-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div>
                    <span>
                        ABOUT INFORMATION
                    </span>

                    <h2>
                        Informasi Tentang Saya
                    </h2>

                    <p>
                        Isi informasi yang ingin ditampilkan pada
                        bagian About portfolio.
                    </p>
                </div>

            </div>


            {{-- FORM --}}
            <form
                action="{{ route('admin.about.update') }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <div class="admin-about-edit-form">


                    {{-- DESCRIPTION --}}
                    <div class="admin-about-edit-form-group admin-about-edit-full">

                        <label for="description">
                            Deskripsi
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="6"
                            placeholder="Tulis deskripsi tentang diri dan pengalaman profesional Anda..."
                        >{{ old('description', $about->description ?? '') }}</textarea>

                        <small>
                            Deskripsi utama yang akan tampil pada halaman About.
                        </small>

                    </div>


                    {{-- LOCATION --}}
                    <div class="admin-about-edit-form-group">

                        <label for="location">
                            Lokasi
                        </label>

                        <div class="admin-about-input-wrapper">

                            <i class="fa-solid fa-location-dot"></i>

                            <input
                                type="text"
                                id="location"
                                name="location"
                                value="{{ old('location', $about->location ?? '') }}"
                                placeholder="Contoh: Palangka Raya, Indonesia"
                            >

                        </div>

                    </div>


                    {{-- FOCUS --}}
                    <div class="admin-about-edit-form-group">

                        <label for="focus">
                            Fokus
                        </label>

                        <div class="admin-about-input-wrapper">

                            <i class="fa-solid fa-bullseye"></i>

                            <input
                                type="text"
                                id="focus"
                                name="focus"
                                value="{{ old('focus', $about->focus ?? '') }}"
                                placeholder="Contoh: Web Development"
                            >

                        </div>

                    </div>


                    {{-- FRAMEWORK --}}
                    <div class="admin-about-edit-form-group">

                        <label for="framework">
                            Framework
                        </label>

                        <div class="admin-about-input-wrapper">

                            <i class="fa-solid fa-code"></i>

                            <input
                                type="text"
                                id="framework"
                                name="framework"
                                value="{{ old('framework', $about->framework ?? '') }}"
                                placeholder="Contoh: Laravel"
                            >

                        </div>

                    </div>


                    {{-- DATABASE --}}
                    <div class="admin-about-edit-form-group">

                        <label for="database">
                            Database
                        </label>

                        <div class="admin-about-input-wrapper">

                            <i class="fa-solid fa-database"></i>

                            <input
                                type="text"
                                id="database"
                                name="database"
                                value="{{ old('database', $about->database ?? '') }}"
                                placeholder="Contoh: MySQL"
                            >

                        </div>

                    </div>


                    {{-- VALUES --}}
                    <div class="admin-about-edit-form-group admin-about-edit-full">

                        <label for="values">
                            Nilai & Keunggulan
                        </label>

                        <textarea
                            id="values"
                            name="values"
                            rows="5"
                            placeholder="Tuliskan nilai, keunggulan, atau cara kerja profesional Anda..."
                        >{{ old('values', $about->values ?? '') }}</textarea>

                        <small>
                            Informasi singkat mengenai nilai dan keunggulan profesional Anda.
                        </small>

                    </div>


                </div>


                {{-- FORM ACTIONS --}}
                <div class="admin-about-edit-actions">

                    <a
                        href="{{ route('admin.about') }}"
                        class="admin-about-cancel-btn"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="admin-about-save-btn"
                    >
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection