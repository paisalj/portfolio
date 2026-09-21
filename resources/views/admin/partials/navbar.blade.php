<header class="admin-navbar">

    {{-- LEFT --}}
    <div class="admin-navbar-left">

        <button
            type="button"
            class="admin-mobile-toggle"
            id="adminMobileToggle"
        >
            <i class="fa-solid fa-bars"></i>
        </button>


        <div class="admin-navbar-heading">

            <h1>
                @yield('admin-title', 'Admin Dashboard')
            </h1>

            <p>
                @yield('admin-subtitle', 'Manage your portfolio.')
            </p>

        </div>

    </div>


    {{-- RIGHT --}}
    <div class="admin-user">

        <div class="admin-user-avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>


        <div class="admin-user-info">

            <strong>
                {{ auth()->user()->name }}
            </strong>

            <span>
                Administrator
            </span>

        </div>

    </div>

</header>