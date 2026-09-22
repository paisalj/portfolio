@extends('admin.layouts.app')

@section('admin-title', 'Tambah Certificate')

@section('admin-content')

<div class="admin-certificates-page">

    <div class="admin-certificates-container">

        {{-- HEADER --}}
        <div class="admin-certificates-header">

            <div>
                <h1>Tambah Certificate</h1>
                <p>Tambahkan sertifikat baru ke portfolio.</p>
            </div>

            <a
                href="{{ route('admin.certificates') }}"
                class="admin-certificates-add-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>

        {{-- VALIDATION ERROR --}}
        @if($errors->any())
            <div class="admin-certificates-alert error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>

            </div>
        @endif

        {{-- FORM --}}
        <form
            action="{{ route('admin.certificates.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="admin-certificates-form"
        >

            @csrf

            <div class="admin-certificates-form-grid">

                {{-- NAME --}}
                <div class="admin-certificates-form-group full">

                    <label for="name">
                        Nama Sertifikat
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Contoh: Sertifikat Kompetensi Programmer"
                        required
                    >

                </div>

                {{-- ISSUER --}}
                <div class="admin-certificates-form-group">

                    <label for="issuer">
                        Penerbit
                    </label>

                    <input
                        type="text"
                        id="issuer"
                        name="issuer"
                        value="{{ old('issuer') }}"
                        placeholder="Contoh: BNSP / LSP / ELTIBIZ"
                    >

                </div>

                {{-- CERTIFICATE NUMBER --}}
                <div class="admin-certificates-form-group">

                    <label for="certificate_number">
                        Nomor Sertifikat
                    </label>

                    <input
                        type="text"
                        id="certificate_number"
                        name="certificate_number"
                        value="{{ old('certificate_number') }}"
                        placeholder="Nomor sertifikat"
                    >

                </div>

                {{-- ISSUE DATE --}}
                <div class="admin-certificates-form-group">

                    <label for="issue_date">
                        Tanggal Terbit
                    </label>

                    <input
                        type="date"
                        id="issue_date"
                        name="issue_date"
                        value="{{ old('issue_date') }}"
                    >

                </div>

                {{-- CREDENTIAL URL --}}
                <div class="admin-certificates-form-group">

                    <label for="credential_url">
                        Credential URL
                    </label>

                    <input
                        type="url"
                        id="credential_url"
                        name="credential_url"
                        value="{{ old('credential_url') }}"
                        placeholder="https://..."
                    >

                </div>

                {{-- IMAGE --}}
                <div class="admin-certificates-form-group full">

                    <label for="image">
                        Gambar Sertifikat
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept="image/*"
                    >

                    <small>
                        Format gambar yang didukung. Maksimal 2 MB.
                    </small>

                </div>

                {{-- DESCRIPTION --}}
                <div class="admin-certificates-form-group full">

                    <label for="description">
                        Deskripsi
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="6"
                        placeholder="Deskripsi singkat tentang sertifikat..."
                    >{{ old('description') }}</textarea>

                </div>

            </div>

            {{-- ACTION --}}
            <div class="admin-certificates-form-actions">

                <a
                    href="{{ route('admin.certificates') }}"
                    class="admin-certificates-cancel-btn"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="admin-certificates-save-btn"
                >
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Certificate
                </button>

            </div>

        </form>

    </div>

</div>

@endsection