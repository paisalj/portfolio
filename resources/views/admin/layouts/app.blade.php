<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('admin-title', 'Admin Panel') | Paisal Johen
    </title>

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
    @include('admin.partials.sidebar')


    {{-- MAIN CONTENT --}}
    <main class="admin-main">

        {{-- NAVBAR --}}
        @include('admin.partials.navbar')


        {{-- PAGE CONTENT --}}
        <div class="admin-page-content">

            @yield('admin-content')

        </div>

    </main>

</div>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('adminMobileToggle');
    const sidebar = document.querySelector('.admin-sidebar');

    if (toggle && sidebar) {

        toggle.addEventListener('click', function () {

            sidebar.classList.toggle('show');

        });

    }

});

</script>

</body>

</html>