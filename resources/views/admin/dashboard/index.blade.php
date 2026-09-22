@extends('admin.layouts.app')

@section('admin-title', 'Dashboard')

@section('admin-content')

<div class="admin-dashboard-page">

    {{-- HEADER --}}
    <div class="admin-dashboard-header">

        <div>
            <div class="admin-dashboard-label">
                <span></span>
                ADMIN PANEL
            </div>

            <h1>
                Dashboard
            </h1>

            <p>
                Selamat datang kembali di Admin Panel Portfolio Paisal Johen.
            </p>
        </div>

    </div>


    {{-- STATISTICS --}}
    <div class="admin-dashboard-stats">

        {{-- SKILLS --}}
        <a
            href="{{ route('admin.skills') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon skills">
                <i class="fa-solid fa-code"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Skills</span>
                <strong>{{ $stats['skills'] }}</strong>
            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>


        {{-- PROJECTS --}}
        <a
            href="{{ route('admin.projects') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon projects">
                <i class="fa-solid fa-folder-open"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Projects</span>
                <strong>{{ $stats['projects'] }}</strong>
            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>


        {{-- EXPERIENCE --}}
        <a
            href="{{ route('admin.experience') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon experience">
                <i class="fa-solid fa-briefcase"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Experience</span>
                <strong>{{ $stats['experiences'] }}</strong>
            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>


        {{-- EDUCATION --}}
        <a
            href="{{ route('admin.education') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon education">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Education</span>
                <strong>{{ $stats['educations'] }}</strong>
            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>


        {{-- CERTIFICATES --}}
        <a
            href="{{ route('admin.certificates') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon certificates">
                <i class="fa-solid fa-certificate"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Certificates</span>
                <strong>{{ $stats['certificates'] }}</strong>
            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>


        {{-- MESSAGES --}}
        <a
            href="{{ route('admin.messages') }}"
            class="admin-dashboard-stat-card"
        >

            <div class="admin-dashboard-stat-icon messages">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="admin-dashboard-stat-content">
                <span>Messages</span>

                <strong>
                    {{ $stats['messages'] }}
                </strong>

                @if($stats['unread_messages'] > 0)

                    <small>
                        {{ $stats['unread_messages'] }} belum dibaca
                    </small>

                @endif

            </div>

            <i class="fa-solid fa-arrow-right admin-dashboard-stat-arrow"></i>

        </a>

    </div>


    {{-- LOWER CONTENT --}}
    <div class="admin-dashboard-grid">

        {{-- LATEST MESSAGES --}}
        <div class="admin-dashboard-panel">

            <div class="admin-dashboard-panel-header">

                <div>
                    <h2>
                        Pesan Terbaru
                    </h2>

                    <p>
                        Pesan terbaru dari pengunjung portfolio.
                    </p>
                </div>

                <a href="{{ route('admin.messages') }}">
                    Lihat Semua
                </a>

            </div>


            <div class="admin-dashboard-message-list">

                @forelse($latestMessages as $message)

                    <a
                        href="{{ route('admin.messages.show', $message) }}"
                        class="admin-dashboard-message-item"
                    >

                        <div class="admin-dashboard-message-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="admin-dashboard-message-content">

                            <strong>
                                {{ $message->name }}
                            </strong>

                            <span>
                                {{ $message->subject ?: 'Tanpa subject' }}
                            </span>

                        </div>

                        <div class="admin-dashboard-message-date">

                            {{ $message->created_at?->format('d M Y') ?? '-' }}

                        </div>

                    </a>

                @empty

                    <div class="admin-dashboard-empty">
                        <i class="fa-solid fa-inbox"></i>
                        <p>Belum ada pesan.</p>
                    </div>

                @endforelse

            </div>

        </div>


        {{-- LATEST PROJECTS --}}
        <div class="admin-dashboard-panel">

            <div class="admin-dashboard-panel-header">

                <div>
                    <h2>
                        Project Terbaru
                    </h2>

                    <p>
                        Project yang baru ditambahkan.
                    </p>
                </div>

                <a href="{{ route('admin.projects') }}">
                    Lihat Semua
                </a>

            </div>


            <div class="admin-dashboard-project-list">

                @forelse($latestProjects as $project)

                    <a
                        href="{{ route('admin.projects.edit', $project) }}"
                        class="admin-dashboard-project-item"
                    >

                        <div class="admin-dashboard-project-icon">
                            <i class="fa-solid fa-folder"></i>
                        </div>

                        <div class="admin-dashboard-project-content">

                            <strong>
                                {{ $project->title }}
                            </strong>

                            <span>
                                {{ $project->skills->pluck('name')->join(', ') ?: 'Belum ada skill' }}
                            </span>

                        </div>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                @empty

                    <div class="admin-dashboard-empty">
                        <i class="fa-solid fa-folder-open"></i>
                        <p>Belum ada project.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</div>

@endsection