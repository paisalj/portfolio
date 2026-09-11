<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Paisal Johen</title>

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

    <div class="admin-login-page">

        <div class="admin-login-card">

            <div class="admin-login-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <h1>Welcome Back</h1>

            <p class="admin-login-subtitle">
                Sign in to your admin panel
            </p>

            @if ($errors->any())
                <div class="admin-login-error">
                    <i class="fa-solid fa-circle-exclamation"></i>

                    <span>
                        {{ $errors->first() }}
                    </span>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">

                @csrf

                <div class="admin-form-group">

                    <label for="email">
                        Email
                    </label>

                    <div class="admin-input-wrapper">

                        <i class="fa-solid fa-envelope"></i>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                            autofocus
                        >

                    </div>

                </div>


                <div class="admin-form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="admin-input-wrapper">

                        <i class="fa-solid fa-lock"></i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                        >

                    </div>

                </div>


                <button
                    type="submit"
                    class="admin-login-button"
                >

                    <i class="fa-solid fa-right-to-bracket"></i>

                    Login

                </button>

            </form>

            <a
                href="{{ route('portfolio.index') }}"
                class="back-to-portfolio"
            >

                <i class="fa-solid fa-arrow-left"></i>

                Back to Portfolio

            </a>

        </div>

    </div>

</body>
</html>