@extends('admin.layouts.app')

@section('admin-title', 'Edit Education')

@section('admin-content')

<div class="admin-education-page">

    <div class="admin-education-container">

        {{-- HEADER --}}
        <div class="admin-education-form-header">

            <div>
                <h1>
                    <i class="fa-solid fa-graduation-cap"></i>
                    Edit Education
                </h1>

                <p>
                    Perbarui informasi riwayat pendidikan.
                </p>
            </div>

            <a
                href="{{ route('admin.education') }}"
                class="admin-education-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>


        {{-- VALIDATION ERROR --}}
        @if($errors->any())

            <div class="admin-education-error">

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
            action="{{ route('admin.education.update', $education) }}"
            method="POST"
            class="admin-education-form"
        >

            @csrf
            @method('PUT')


            {{-- EDUCATION INFORMATION --}}
            <div class="admin-education-form-section">

                <div class="admin-education-section-title">

                    <i class="fa-solid fa-circle-info"></i>

                    <div>
                        <h2>Informasi Pendidikan</h2>

                        <p>
                            Perbarui informasi utama pendidikan.
                        </p>
                    </div>

                </div>


                <div class="admin-education-form-grid">

                    {{-- INSTITUTION --}}
                    <div class="admin-education-form-group">

                        <label for="institution">
                            Institusi / Sekolah
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="institution"
                            name="institution"
                            value="{{ old('institution', $education->institution) }}"
                            placeholder="Contoh: ELTIBIZ"
                            required
                        >

                    </div>


                    {{-- DEGREE --}}
                    <div class="admin-education-form-group">

                        <label for="degree">
                            Gelar / Jenjang
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="degree"
                            name="degree"
                            value="{{ old('degree', $education->degree) }}"
                            placeholder="Contoh: Pendidikan Profesi"
                            required
                        >

                    </div>


                    {{-- FIELD OF STUDY --}}
                    <div class="admin-education-form-group">

                        <label for="field_of_study">
                            Bidang Studi / Jurusan
                        </label>

                        <input
                            type="text"
                            id="field_of_study"
                            name="field_of_study"
                            value="{{ old('field_of_study', $education->field_of_study) }}"
                            placeholder="Contoh: Manajemen Informatika dan Komputer"
                        >

                    </div>


                    {{-- DESCRIPTION --}}
                    <div class="admin-education-form-group full">

                        <label for="description">
                            Deskripsi
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="6"
                            placeholder="Tambahkan deskripsi pendidikan..."
                        >{{ old('description', $education->description) }}</textarea>

                    </div>

                </div>

            </div>


            {{-- PERIOD --}}
            <div class="admin-education-form-section">

                <div class="admin-education-section-title">

                    <i class="fa-solid fa-calendar"></i>

                    <div>
                        <h2>Periode Pendidikan</h2>

                        <p>
                            Perbarui tanggal mulai dan selesai pendidikan.
                        </p>
                    </div>

                </div>


                <div class="admin-education-form-grid">

                    {{-- START DATE --}}
                    <div class="admin-education-form-group">

                        <label for="start_date">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            value="{{ old(
                                'start_date',
                                optional($education->start_date)->format('Y-m-d')
                            ) }}"
                        >

                    </div>


                    {{-- END DATE --}}
                    <div class="admin-education-form-group">

                        <label for="end_date">
                            Tanggal Selesai
                        </label>

                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            value="{{ old(
                                'end_date',
                                optional($education->end_date)->format('Y-m-d')
                            ) }}"
                        >

                    </div>

                </div>

            </div>


            {{-- ACTION --}}
            <div class="admin-education-form-actions">

                <a
                    href="{{ route('admin.education') }}"
                    class="admin-education-cancel-btn"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="admin-education-save-btn"
                >
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection