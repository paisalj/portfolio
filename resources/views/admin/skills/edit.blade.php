@extends('admin.layouts.app')

@section('admin-title', 'Edit Skill')

@section('admin-content')

<div class="admin-skills-page">

    <div class="admin-skills-container">

        {{-- HEADER --}}
        <div class="admin-skills-header">

            <div>
                <span class="admin-skills-eyebrow">
                    Portfolio Management
                </span>

                <h1>
                    Edit Skill
                </h1>

                <p>
                    Perbarui informasi skill yang digunakan
                    pada portfolio Anda.
                </p>
            </div>

            <a
                href="{{ route('admin.skills') }}"
                class="admin-skills-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- ERROR --}}
        @if($errors->any())

            <div class="admin-skills-alert admin-skills-alert-error">

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
        <div class="admin-skills-form-card">

            <div class="admin-skills-form-header">

                <div class="admin-skills-form-icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>

                <div>
                    <span>
                        EDIT SKILL
                    </span>

                    <h2>
                        {{ $skill->name }}
                    </h2>

                    <p>
                        Perbarui informasi skill sesuai kebutuhan
                        portfolio Anda.
                    </p>
                </div>

            </div>


            <form
                action="{{ route('admin.skills.update', $skill) }}"
                method="POST"
            >

                @csrf
                @method('PUT')

                <div class="admin-skills-form-grid">

                    {{-- NAME --}}
                    <div class="admin-skills-form-group">

                        <label for="name">
                            Nama Skill
                        </label>

                        <div class="admin-skills-input-wrapper">

                            <i class="fa-solid fa-code"></i>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $skill->name) }}"
                                placeholder="Contoh: Laravel"
                                required
                            >

                        </div>

                    </div>


                    {{-- CATEGORY --}}
                    <div class="admin-skills-form-group">

                        <label for="category">
                            Kategori
                        </label>

                        <div class="admin-skills-input-wrapper">

                            <i class="fa-solid fa-layer-group"></i>

                            <input
                                type="text"
                                id="category"
                                name="category"
                                value="{{ old('category', $skill->category) }}"
                                placeholder="Contoh: Backend"
                            >

                        </div>

                    </div>


                    {{-- PERCENTAGE --}}
                    <div class="admin-skills-form-group">

                        <label for="percentage">
                            Persentase Kemampuan
                        </label>

                        <div class="admin-skills-input-wrapper">

                            <i class="fa-solid fa-chart-simple"></i>

                            <input
                                type="number"
                                id="percentage"
                                name="percentage"
                                value="{{ old('percentage', $skill->percentage) }}"
                                min="0"
                                max="100"
                                placeholder="Contoh: 85"
                                required
                            >

                            <span class="admin-skills-input-suffix">
                                %
                            </span>

                        </div>

                        <small>
                            Masukkan nilai antara 0 sampai 100.
                        </small>

                    </div>


                    {{-- ICON --}}
                    <div class="admin-skills-form-group">

                        <label for="icon">
                            Icon
                        </label>

                        <div class="admin-skills-input-wrapper">

                            <i class="fa-solid fa-icons"></i>

                            <input
                                type="text"
                                id="icon"
                                name="icon"
                                value="{{ old('icon', $skill->icon) }}"
                                placeholder="Contoh: fa-brands fa-laravel"
                            >

                        </div>

                        <small>
                            Gunakan class Font Awesome jika tersedia.
                        </small>

                    </div>

                </div>


                {{-- ACTIONS --}}
                <div class="admin-skills-form-actions">

                    <a
                        href="{{ route('admin.skills') }}"
                        class="admin-skills-cancel-btn"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="admin-skills-save-btn"
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