<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Paisal Johen</title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>

<div class="admin-layout">

    {{-- SIDEBAR --}}
    <aside class="admin-sidebar">

        <div class="admin-brand">
            <div class="admin-brand-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <div>
                <h2>PaisalJohen</h2>
                <span>Admin Panel</span>
            </div>
        </div>

        <nav class="admin-nav">

            <a href="{{ route('admin.dashboard') }}"
               class="admin-nav-link active">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.profile') }}" class="admin-nav-link">
                <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-code"></i>
                <span>Skills</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-folder-open"></i>
                <span>Projects</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-briefcase"></i>
                <span>Experience</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>Education</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-certificate"></i>
                <span>Certificates</span>
            </a>

            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-envelope"></i>
                <span>Messages</span>
            </a>

        </nav>

        <div class="admin-sidebar-bottom">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button type="submit" class="admin-logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </button>
            </form>

        </div>

    </aside>


    {{-- MAIN CONTENT --}}
    <main class="admin-main">

        {{-- TOPBAR --}}
        <header class="admin-topbar">

            <div>
                <h1>Dashboard</h1>
                <p>Manage your portfolio content.</p>
            </div>

            <div class="admin-user">

                <div class="admin-user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="admin-user-info">
                    <strong>{{ auth()->user()->name }}</strong>
                    <span>Administrator</span>
                </div>

            </div>

        </header>


        {{-- WELCOME --}}
        <section class="admin-welcome">

            <div>
                <span class="admin-welcome-label">
                    ADMIN PANEL
                </span>

                <h2>
                    Welcome back, {{ auth()->user()->name }} 👋
                </h2>

                <p>
                    Manage your portfolio information, projects,
                    skills, experience and messages from one place.
                </p>
            </div>

            <div class="admin-welcome-icon">
                <i class="fa-solid fa-gauge-high"></i>
            </div>

        </section>


        {{-- STATISTICS --}}
        <section class="admin-section">

            <div class="admin-section-heading">
                <div>
                    <h2>Overview</h2>
                    <p>Your portfolio statistics</p>
                </div>
            </div>


            <div class="admin-stats-grid">

                {{-- SKILLS --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Skills</span>
                        <strong>{{ $stats['skills'] }}</strong>
                    </div>

                </div>


                {{-- PROJECTS --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Projects</span>
                        <strong>{{ $stats['projects'] }}</strong>
                    </div>

                </div>


                {{-- EXPERIENCE --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Experience</span>
                        <strong>{{ $stats['experiences'] }}</strong>
                    </div>

                </div>


                {{-- EDUCATION --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Education</span>
                        <strong>{{ $stats['educations'] }}</strong>
                    </div>

                </div>


                {{-- CERTIFICATES --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-certificate"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Certificates</span>
                        <strong>{{ $stats['certificates'] }}</strong>
                    </div>

                </div>


                {{-- MESSAGES --}}
                <div class="admin-stat-card">

                    <div class="admin-stat-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="admin-stat-content">
                        <span>Messages</span>
                        <strong>{{ $stats['messages'] }}</strong>
                    </div>

                </div>

            </div>

        </section>


        {{-- QUICK ACTIONS --}}
        <section class="admin-section">

            <div class="admin-section-heading">
                <div>
                    <h2>Quick Actions</h2>
                    <p>Manage your portfolio content</p>
                </div>
            </div>


            <div class="admin-actions-grid">

                <a href="#" class="admin-action-card">
                    <i class="fa-solid fa-user"></i>

                    <div>
                        <strong>Edit Profile</strong>
                        <span>Update your personal information</span>
                    </div>

                    <i class="fa-solid fa-arrow-right"></i>
                </a>


                <a href="#" class="admin-action-card">
                    <i class="fa-solid fa-folder-plus"></i>

                    <div>
                        <strong>Add Project</strong>
                        <span>Add a new portfolio project</span>
                    </div>

                    <i class="fa-solid fa-arrow-right"></i>
                </a>


                <a href="#" class="admin-action-card">
                    <i class="fa-solid fa-code"></i>

                    <div>
                        <strong>Manage Skills</strong>
                        <span>Update your technical skills</span>
                    </div>

                    <i class="fa-solid fa-arrow-right"></i>
                </a>


                <a href="#" class="admin-action-card">
                    <i class="fa-solid fa-envelope"></i>

                    <div>
                        <strong>View Messages</strong>
                        <span>Check messages from visitors</span>
                    </div>

                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </section>

    </main>

</div>

</body>
</html>