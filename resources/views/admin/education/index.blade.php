@extends('admin.layouts.app')

@section('admin-title', 'Education')

@section('admin-content')

<div class="admin-education-page">

    <div class="admin-education-container">

        {{-- HEADER --}}
        <div class="admin-education-header">

            <div>
                <h1>
                    <i class="fa-solid fa-graduation-cap"></i>
                    Education
                </h1>

                <p>
                    Kelola riwayat pendidikan yang ditampilkan pada portfolio.
                </p>
            </div>

            <a
                href="{{ route('admin.education.create') }}"
                class="admin-education-add-btn"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Education
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="admin-education-success">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        {{-- TABLE --}}
        <div class="admin-education-table-wrapper">

            <table class="admin-education-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Institusi</th>
                        <th>Gelar</th>
                        <th>Bidang Studi</th>
                        <th>Periode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($educations as $education)

                        <tr>

                            {{-- NUMBER --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- INSTITUTION --}}
                            <td>

                                <div class="admin-education-institution">

                                    <strong>
                                        {{ $education->institution }}
                                    </strong>

                                    @if($education->description)

                                        <small>
                                            {{ Str::limit($education->description, 80) }}
                                        </small>

                                    @endif

                                </div>

                            </td>


                            {{-- DEGREE --}}
                            <td>
                                {{ $education->degree }}
                            </td>


                            {{-- FIELD OF STUDY --}}
                            <td>
                                {{ $education->field_of_study ?: '-' }}
                            </td>


                            {{-- PERIOD --}}
                            <td>

                                <div class="admin-education-period">

                                    <span>
                                        {{ $education->start_date
                                            ? $education->start_date->format('M Y')
                                            : '-'
                                        }}
                                    </span>

                                    <i class="fa-solid fa-arrow-right"></i>

                                    <span>
                                        {{ $education->end_date
                                            ? $education->end_date->format('M Y')
                                            : 'Sekarang'
                                        }}
                                    </span>

                                </div>

                            </td>


                            {{-- ACTION --}}
                            <td>

                                <div class="admin-education-actions">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('admin.education.edit', $education) }}"
                                        class="admin-education-action-btn edit"
                                        title="Edit"
                                    >
                                        <i class="fa-solid fa-pen"></i>
                                    </a>


                                    {{-- DELETE --}}
<form
    action="{{ route('admin.education.destroy', $education) }}"
    method="POST"
    class="delete-education-form"
>
    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="admin-education-action-btn delete"
        title="Hapus"
    >
        <i class="fa-solid fa-trash"></i>
    </button>
</form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="admin-education-empty"
                            >

                                <i class="fa-solid fa-graduation-cap"></i>

                                <strong>
                                    Belum ada data pendidikan
                                </strong>

                                <span>
                                    Tambahkan riwayat pendidikan pertama Anda.
                                </span>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection