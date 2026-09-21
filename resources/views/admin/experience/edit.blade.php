@extends('admin.layouts.app')

@section('admin-title', 'Edit Experience')

@section('admin-content')

<div class="admin-experience-page">

    <div class="admin-experience-container">

        {{-- HEADER --}}
        <div class="admin-experience-form-header">

            <div>
                <h1>
                    <i class="fa-solid fa-briefcase"></i>
                    Edit Experience
                </h1>

                <p>
                    Perbarui informasi pengalaman kerja atau pengalaman profesional.
                </p>
            </div>

            <a
                href="{{ route('admin.experience') }}"
                class="admin-experience-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-experience-error">

                <strong>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Periksa kembali data:
                </strong>

                <ul>

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- FORM --}}
        <form
            action="{{ route('admin.experience.update', $experience) }}"
            method="POST"
            class="admin-experience-form"
        >

            @csrf
            @method('PUT')


            {{-- INFORMATION --}}
            <div class="admin-experience-form-section">

                <div class="admin-experience-section-title">

                    <i class="fa-solid fa-circle-info"></i>

                    <div>
                        <h2>Informasi Experience</h2>

                        <p>
                            Perbarui informasi utama pengalaman.
                        </p>
                    </div>

                </div>


                <div class="admin-experience-form-grid">

                    {{-- POSITION --}}
                    <div class="admin-experience-form-group">

                        <label for="position">
                            Posisi / Jabatan
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="position"
                            name="position"
                            value="{{ old('position', $experience->position) }}"
                            placeholder="Contoh: Junior Web Developer"
                            required
                        >

                    </div>


                    {{-- COMPANY --}}
                    <div class="admin-experience-form-group">

                        <label for="company">
                            Perusahaan / Instansi
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="company"
                            name="company"
                            value="{{ old('company', $experience->company) }}"
                            placeholder="Contoh: PT Example Indonesia"
                            required
                        >

                    </div>


                    {{-- LOCATION --}}
                    <div class="admin-experience-form-group">

                        <label for="location">
                            Lokasi
                        </label>

                        <input
                            type="text"
                            id="location"
                            name="location"
                            value="{{ old('location', $experience->location) }}"
                            placeholder="Contoh: Palangka Raya"
                        >

                    </div>


                    {{-- DESCRIPTION --}}
                    <div class="admin-experience-form-group full">

                        <label for="description">
                            Deskripsi
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="6"
                            placeholder="Jelaskan tanggung jawab atau pengalaman..."
                        >{{ old('description', $experience->description) }}</textarea>

                    </div>

                </div>

            </div>


            {{-- PERIOD --}}
            <div class="admin-experience-form-section">

                <div class="admin-experience-section-title">

                    <i class="fa-solid fa-calendar"></i>

                    <div>
                        <h2>Periode</h2>

                        <p>
                            Perbarui periode pengalaman.
                        </p>
                    </div>

                </div>


                <div class="admin-experience-form-grid">

                    {{-- START DATE --}}
                    <div class="admin-experience-form-group">

                        <label for="start_date">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            value="{{ old(
                                'start_date',
                                optional($experience->start_date)->format('Y-m-d')
                            ) }}"
                        >

                    </div>


                    {{-- END DATE --}}
                    <div class="admin-experience-form-group">

                        <label for="end_date">
                            Tanggal Selesai
                        </label>

                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            value="{{ old(
                                'end_date',
                                optional($experience->end_date)->format('Y-m-d')
                            ) }}"
                        >

                    </div>

                </div>


                {{-- CURRENT --}}
                <label class="admin-experience-current-option">

                    <input
                        type="checkbox"
                        id="is_current"
                        name="is_current"
                        value="1"
                        {{ old('is_current', $experience->is_current) ? 'checked' : '' }}
                    >

                    <span class="admin-experience-current-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <span>
                        <strong>
                            Saya masih bekerja di sini
                        </strong>

                        <small>
                            Jika dicentang, tanggal selesai akan dianggap kosong dan ditampilkan sebagai "Sekarang".
                        </small>
                    </span>

                </label>

            </div>


            {{-- ACTION --}}
            <div class="admin-experience-form-actions">

                <a
                    href="{{ route('admin.experience') }}"
                    class="admin-experience-cancel-btn"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="admin-experience-save-btn"
                >
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection