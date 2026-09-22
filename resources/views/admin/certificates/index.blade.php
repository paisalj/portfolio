@extends('admin.layouts.app')

@section('admin-title', 'Certificates')

@section('admin-content')

<div class="admin-certificates-page">

    <div class="admin-certificates-container">

        {{-- HEADER --}}
        <div class="admin-certificates-header">

            <div>
                <h1>Certificates</h1>
                <p>Kelola sertifikat dan pencapaian yang ditampilkan di portfolio.</p>
            </div>

            <a
                href="{{ route('admin.certificates.create') }}"
                class="admin-certificates-add-btn"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Certificate
            </a>

        </div>

        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))
            <div class="admin-certificates-alert success">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR MESSAGE --}}
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

        {{-- TABLE --}}
        @if($certificates->count())

            <div class="admin-certificates-table-wrapper">

                <table class="admin-certificates-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sertifikat</th>
                            <th>Penerbit</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Credential</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($certificates as $certificate)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                {{-- CERTIFICATE --}}
                                <td>

                                    <div class="admin-certificate-info">

                                        @if($certificate->image)

                                            <img
                                                src="{{ asset('storage/' . $certificate->image) }}"
                                                alt="{{ $certificate->name }}"
                                                class="admin-certificate-image"
                                            >

                                        @else

                                            <div class="admin-certificate-placeholder">
                                                <i class="fa-solid fa-certificate"></i>
                                            </div>

                                        @endif

                                        <div>

                                            <strong>
                                                {{ $certificate->name }}
                                            </strong>

                                            @if($certificate->description)
                                                <span>
                                                    {{ Str::limit($certificate->description, 70) }}
                                                </span>
                                            @endif

                                        </div>

                                    </div>

                                </td>

                                {{-- ISSUER --}}
                                <td>
                                    {{ $certificate->issuer ?: '-' }}
                                </td>

                                {{-- NUMBER --}}
                                <td>
                                    {{ $certificate->certificate_number ?: '-' }}
                                </td>

                                {{-- DATE --}}
                                <td>

                                    @if($certificate->issue_date)
                                        {{ $certificate->issue_date->format('d M Y') }}
                                    @else
                                        -
                                    @endif

                                </td>

                                {{-- CREDENTIAL --}}
                                <td>

                                    @if($certificate->credential_url)

                                        <a
                                            href="{{ $certificate->credential_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="admin-certificate-credential"
                                        >
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            Lihat
                                        </a>

                                    @else

                                        <span class="admin-certificate-no-link">
                                            -
                                        </span>

                                    @endif

                                </td>

                                {{-- ACTION --}}
                                <td>

                                    <div class="admin-certificate-actions">

                                        <a
                                            href="{{ route('admin.certificates.edit', $certificate) }}"
                                            class="admin-certificate-action-btn edit"
                                            title="Edit"
                                        >
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form
                                            action="{{ route('admin.certificates.destroy', $certificate) }}"
                                            method="POST"
                                            class="delete-certificate-form"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="admin-certificate-action-btn delete"
                                                title="Hapus"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="admin-certificates-empty">

                <div class="admin-certificates-empty-icon">
                    <i class="fa-solid fa-certificate"></i>
                </div>

                <h3>Belum ada certificate</h3>

                <p>
                    Tambahkan sertifikat untuk ditampilkan di portfolio.
                </p>

                <a
                    href="{{ route('admin.certificates.create') }}"
                    class="admin-certificates-add-btn"
                >
                    <i class="fa-solid fa-plus"></i>
                    Tambah Certificate
                </a>

            </div>

        @endif

    </div>

</div>

@endsection