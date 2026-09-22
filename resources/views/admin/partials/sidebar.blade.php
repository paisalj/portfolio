<aside class="admin-sidebar">

    {{-- BRAND --}}
    <div class="admin-brand">

        <div class="admin-brand-icon">
            <i class="fa-solid fa-code"></i>
        </div>

        <div class="admin-brand-text">
            <h2>PaisalJohen</h2>
            <span>Admin Panel</span>
        </div>

    </div>


    {{-- MENU --}}
    <nav class="admin-nav">

        <a
            href="{{ route('admin.dashboard') }}"
            class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span>
        </a>


        <a
            href="{{ route('admin.home') }}"
            class="admin-nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-user"></i>
            <span>Home</span>
        </a>
        <a
            href="{{ route('admin.about') }}"
            class="admin-nav-link {{ request()->routeIs('admin.about') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-user"></i>
            <span>About</span>
        </a>
        <a
            href="{{ route('admin.profile') }}"
            class="admin-nav-link {{ request()->routeIs('admin.profile*') ? 'active' : '' }}"
        >
            <i class="fa-solid fa-user"></i>
            <span>Profile</span>
        </a>


        <a href="{{ route('admin.skills') }}" class="admin-nav-link">
            <i class="fa-solid fa-code"></i>
            <span>Skills</span>
        </a>


        <a href="{{ route('admin.projects') }}" class="admin-nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <span>Projects</span>
        </a>


        <a href="{{ route('admin.experience') }}" class="admin-nav-link">
            <i class="fa-solid fa-briefcase"></i>
            <span>Experience</span>
        </a>


        <a href="{{ route('admin.education') }}" class="admin-nav-link">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>Education</span>
        </a>


        <a href="{{ route('admin.certificates') }}" class="admin-nav-link">
            <i class="fa-solid fa-certificate"></i>
            <span>Certificates</span>
        </a>


        <a href="#" class="admin-nav-link">
            <i class="fa-solid fa-envelope"></i>
            <span>Messages</span>
        </a>

    </nav>


    {{-- LOGOUT --}}
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