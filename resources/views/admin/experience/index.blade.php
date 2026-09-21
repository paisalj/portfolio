@extends('admin.layouts.app')

@section('admin-title', 'Experience')

@section('admin-content')

<div class="admin-experience-page">

    <div class="admin-experience-container">

        {{-- HEADER --}}
        <div class="admin-experience-header">

            <div>
                <h1>
                    <i class="fa-solid fa-briefcase"></i>
                    Experience
                </h1>

                <p>
                    Kelola pengalaman kerja, PKL, dan pengalaman profesional.
                </p>
            </div>

            <a
                href="{{ route('admin.experience.create') }}"
                class="admin-experience-add-btn"
            >
                <i class="fa-solid fa-plus"></i>
                Tambah Experience
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="admin-experience-alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>

        @endif


        {{-- ERROR --}}
        @if($errors->any())

            <div class="admin-experience-error">

                <strong>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Terjadi kesalahan:
                </strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif


        {{-- TABLE --}}
        <div class="admin-experience-table-wrapper">

            <table class="admin-experience-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>Lokasi</th>
                        <th>Periode</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($experiences as $experience)

                        <tr>

                            {{-- NUMBER --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- POSITION --}}
                            <td>

                                <div class="experience-position">

                                    <div class="experience-icon">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            {{ $experience->position }}
                                        </strong>

                                        @if($experience->description)

                                            <span>
                                                {{ \Illuminate\Support\Str::limit($experience->description, 70) }}
                                            </span>

                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- COMPANY --}}
                            <td>

                                <span class="experience-company">
                                    {{ $experience->company }}
                                </span>

                            </td>


                            {{-- LOCATION --}}
                            <td>

                                @if($experience->location)

                                    <span class="experience-location">
                                        <i class="fa-solid fa-location-dot"></i>
                                        {{ $experience->location }}
                                    </span>

                                @else

                                    <span class="experience-no-data">
                                        -
                                    </span>

                                @endif

                            </td>


                            {{-- PERIOD --}}
                            <td>

                                <div class="experience-period">

                                    @if($experience->start_date)

                                        {{ $experience->start_date->format('M Y') }}

                                    @else

                                        -

                                    @endif

                                    <span>—</span>

                                    @if($experience->is_current)

                                        Sekarang

                                    @elseif($experience->end_date)

                                        {{ $experience->end_date->format('M Y') }}

                                    @else

                                        -

                                    @endif

                                </div>

                            </td>


                            {{-- STATUS --}}
                            <td>

                                @if($experience->is_current)

                                    <span class="experience-current-badge">
                                        <i class="fa-solid fa-circle"></i>
                                        Saat Ini
                                    </span>

                                @else

                                    <span class="experience-finished-badge">
                                        Selesai
                                    </span>

                                @endif

                            </td>


                            {{-- ACTION --}}
                            <td>

                                <div class="experience-action-buttons">

                                    <a
                                        href="{{ route('admin.experience.edit', $experience) }}"
                                        class="experience-action edit"
                                        title="Edit"
                                    >
                                        <i class="fa-solid fa-pen"></i>
                                    </a>


<form
    action="{{ route('admin.experience.destroy', $experience) }}"
    method="POST"
    class="delete-experience-form"
>
    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="admin-experience-action-btn delete"
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
                                colspan="7"
                                class="experience-empty"
                            >

                                <i class="fa-solid fa-briefcase"></i>

                                <h3>
                                    Belum ada experience
                                </h3>

                                <p>
                                    Tambahkan pengalaman kerja atau pengalaman profesional.
                                </p>

                                <a
                                    href="{{ route('admin.experience.create') }}"
                                    class="admin-experience-add-btn"
                                >
                                    <i class="fa-solid fa-plus"></i>
                                    Tambah Experience
                                </a>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection