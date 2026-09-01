<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - Portal Magang Dinas Pendidikan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: #f7f7ff;
            color: #20222d;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           LEFT PANEL
        ========================= */

        .login-left {
            width: 55%;
            min-height: 100vh;
            position: relative;
            overflow: hidden;

            background-image:
                linear-gradient(
                    rgba(0, 63, 150, 0.45),
                    rgba(0, 63, 150, 0.45)
                ),
                url('{{ asset('images/backgrnd-login3.jpg') }}');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            color: #ffffff;
        }

        .left-content {
            position: relative;
            z-index: 2;
            height: 100%;
            min-height: 100vh;
            padding: 48px;
            display: flex;
            flex-direction: column;
        }

        /* Logo */

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            background: #ffffff;
            border-radius: 7px;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }

        .brand-logo img {
            width: 34px;
            height: 34px;
            object-fit: contain;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .brand-name {
            font-size: 21px;
            line-height: 1.15;
            font-weight: 700;
        }

        .brand-region {
            font-size: 13px;
            line-height: 1.2;
            font-weight: 400;
            letter-spacing: 0.2px;
        }

        /* Welcome */

        .welcome-content {
            margin-top: auto;
            margin-bottom: 66px;
            max-width: 650px;
        }

        .portal-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            width: fit-content;

            padding: 8px 17px;
            margin-bottom: 32px;

            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 999px;

            background: rgba(27, 94, 180, 0.55);

            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .portal-icon {
            width: 18px;
            height: 18px;
        }

        .welcome-title {
            font-size: 32px;
            line-height: 1.2;
            font-weight: 700;

            max-width: 620px;
            margin-bottom: 18px;
        }

        .welcome-description {
            max-width: 620px;

            font-size: 16px;
            line-height: 1.55;
            color: rgba(255, 255, 255, 0.9);
        }

        /* =========================
           RIGHT PANEL
        ========================= */

        .login-right {
            width: 45%;
            min-height: 100vh;

            display: flex;
            flex-direction: column;
            align-items: center;

            padding: 32px 40px 28px;

            background: #f8f8ff;
        }

        .login-card {
            width: 100%;
            max-width: 480px;

            margin-top: 0;

            background: #ffffff;

            border: 1px solid #c8ccdc;
            border-radius: 12px;

            overflow: hidden;

            box-shadow: 0 2px 8px rgba(25, 35, 60, 0.04);
        }

        /* Tabs */

        .login-tabs {
            height: 52px;

            display: grid;
            grid-template-columns: 1fr 1fr;

            border-bottom: 1px solid #c8ccdc;
        }

        .login-tab {
            position: relative;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 600;

            color: #4f5260;
            text-decoration: none;
        }

        .login-tab.active {
            color: #0047ad;
        }

        .login-tab.active::after {
            content: "";

            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;

            height: 2px;

            background: #0056d6;
        }

        /* Form */

        .login-form {
            padding: 42px 40px 40px;
        }

        .login-heading {
            font-size: 25px;
            line-height: 1.2;
            font-weight: 700;

            margin-bottom: 10px;
        }

        .login-subheading {
            color: #505361;

            font-size: 14px;
            line-height: 1.45;

            margin-bottom: 34px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;

            margin-bottom: 8px;

            font-size: 13px;
            font-weight: 600;

            color: #2d303b;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;

            width: 20px;
            height: 20px;

            transform: translateY(-50%);

            color: #74798a;

            pointer-events: none;
        }

        .form-input {
            width: 100%;
            height: 47px;

            padding: 0 43px;

            border: 1px solid #bdc3d5;
            border-radius: 8px;

            background: #ffffff;

            color: #30323d;

            font-family: inherit;
            font-size: 14px;

            outline: none;

            transition: border-color 0.15s ease,
                        box-shadow 0.15s ease;
        }

        .form-input::placeholder {
            color: #7c8191;
        }

        .form-input:focus {
            border-color: #0056d6;

            box-shadow: 0 0 0 3px rgba(0, 86, 214, 0.10);
        }

        .password-toggle {
            position: absolute;

            right: 12px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #74798a;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 2px;
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Error */

        .input-error {
            margin-top: 7px;

            font-size: 12px;
            color: #c62828;
        }

        .login-error {
            margin-bottom: 20px;
            padding: 10px 12px;

            border: 1px solid #f2b8b5;
            border-radius: 7px;

            background: #fff5f4;

            color: #b3261e;

            font-size: 13px;
        }

        /* Remember + Forgot */

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-top: -2px;
            margin-bottom: 27px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;

            color: #4e5260;

            font-size: 13px;

            cursor: pointer;
        }

        .remember input {
            appearance: none;

            width: 17px;
            height: 17px;

            border: 1px solid #b9bfd0;
            border-radius: 4px;

            background: #ffffff;

            cursor: pointer;

            position: relative;
        }

        .remember input:checked {
            border-color: #0056d6;
            background: #0056d6;
        }

        .remember input:checked::after {
            content: "✓";

            position: absolute;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -53%);

            color: #ffffff;

            font-size: 11px;
            font-weight: 700;
        }

        .forgot-password {
            color: #004db5;

            font-size: 13px;
            font-weight: 600;

            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Login Button */

        .login-button {
            width: 100%;
            height: 42px;

            border: none;
            border-radius: 7px;

            background: #0056d6;
            color: #ffffff;

            font-family: inherit;
            font-size: 13px;
            font-weight: 600;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            transition: background 0.15s ease;
        }

        .login-button:hover {
            background: #004bbd;
        }

        .login-button svg {
            width: 17px;
            height: 17px;
        }

        /* Register */

        .register-area {
            height: 53px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #f0f1fa;

            border-top: 1px solid #c8ccdc;

            color: #555968;

            font-size: 13px;
        }

        .register-link {
            margin-left: 4px;

            color: #004db5;
            font-weight: 600;

            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        /* Footer */

        .login-footer {
            width: 100%;
            max-width: 480px;

            margin-top: auto;

            text-align: center;

            color: #6b6f7d;

            font-size: 12px;
            font-weight: 600;

            letter-spacing: 0.15px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {
            .login-left {
                width: 50%;
            }

            .login-right {
                width: 50%;
                padding-left: 25px;
                padding-right: 25px;
            }

            .left-content {
                padding: 35px;
            }

            .welcome-title {
                font-size: 27px;
            }

            .welcome-description {
                font-size: 14px;
            }

            .login-form {
                padding-left: 28px;
                padding-right: 28px;
            }
        }

        @media (max-width: 700px) {
            .login-page {
                display: block;
            }

            .login-left {
                width: 100%;
                min-height: 300px;
            }

            .left-content {
                min-height: 300px;
                padding: 28px;
            }

            .welcome-content {
                margin-top: 50px;
                margin-bottom: 0;
            }

            .portal-badge {
                margin-bottom: 18px;
            }

            .welcome-title {
                font-size: 25px;
            }

            .welcome-description {
                font-size: 14px;
            }

            .login-right {
                width: 100%;
                min-height: auto;

                padding: 25px 18px 25px;
            }

            .login-card {
                max-width: 520px;
            }

            .login-footer {
                margin-top: 25px;
            }
        }
    </style>
</head>

<body>

<div class="login-page">

    {{-- =========================
         LEFT PANEL
    ========================== --}}
    <section class="login-left">

        <div class="left-content">

            {{-- Logo --}}
            <div class="brand">
                <div class="brand-logo">
                    <img
                        src="{{ asset('images/logo-dindik-jatim.svg') }}"
                        alt="Logo Dinas Pendidikan Jawa Timur"
                    >
                </div>

                <div class="brand-text">
                    <div class="brand-name">
                        Dinas Pendidikan
                    </div>

                    <div class="brand-region">
                        Provinsi Jawa Timur
                    </div>
                </div>
            </div>

            {{-- Welcome --}}
            <div class="welcome-content">

                <div class="portal-badge">

                    <svg
                        class="portal-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M3 9l9-5 9 5"/>
                        <path d="M5 10v7"/>
                        <path d="M9 10v7"/>
                        <path d="M15 10v7"/>
                        <path d="M19 10v7"/>
                        <path d="M3 18h18"/>
                    </svg>

                    <span>INTERNSHIP PORTAL</span>

                </div>

                <h1 class="welcome-title">
                    Selamat Datang di Portal Magang Dinas Pendidikan
                </h1>

                <p class="welcome-description">
                    Platform terpadu untuk pendaftaran, seleksi, dan manajemen kegiatan magang bagi mahasiswa dan siswa vokasi di lingkungan dinas pendidikan.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================
         RIGHT PANEL
    ========================== --}}
    <section class="login-right">

        <div class="login-card">

            {{-- Tabs --}}
            <div class="login-tabs">

                <a href="{{ route('login') }}" class="login-tab active">
                    Masuk
                </a>

                <a href="#" class="login-tab">
                    Daftar
                </a>

            </div>


            {{-- Form --}}
            <form
                method="POST"
                action="{{ url('/login') }}"
                class="login-form"
            >

                @csrf

                <h1 class="login-heading">
                    Selamat Datang
                </h1>

                <p class="login-subheading">
                    Silakan masukkan email dan kata sandi Anda untuk mengakses portal magang.
                </p>


                {{-- Error --}}
                @if ($errors->any())
                    <div class="login-error">
                        {{ $errors->first() }}
                    </div>
                @endif


                {{-- Email --}}
                <div class="form-group">

                    <label
                        for="email"
                        class="form-label"
                    >
                        Email
                    </label>

                    <div class="input-wrapper">

                        <svg
                            class="input-icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            />
                            <path d="M3 7l9 6 9-6"/>
                        </svg>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-input"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="email"
                            required
                        >

                    </div>

                    @error('email')
                        <div class="input-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Password --}}
                <div class="form-group">

                    <label
                        for="password"
                        class="form-label"
                    >
                        Kata Sandi
                    </label>

                    <div class="input-wrapper">

                        <svg
                            class="input-icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect
                                x="5"
                                y="10"
                                width="14"
                                height="10"
                                rx="2"
                            />
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                            <path d="M12 14v3"/>
                        </svg>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-input"
                            placeholder="Masukkan kata sandi"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            aria-label="Tampilkan kata sandi"
                        >
                            <svg
                                id="eye-icon"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>
                                <circle cx="12" cy="12" r="2.5"/>
                            </svg>
                        </button>

                    </div>

                    @error('password')
                        <div class="input-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Remember + Forgot --}}
                <div class="form-options">

                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >

                        <span>Ingat saya</span>

                    </label>

                    <a
                        href="#"
                        class="forgot-password"
                    >
                        Lupa Kata Sandi?
                    </a>

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="login-button"
                >

                    <span>Masuk</span>

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M5 12h13"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>

                </button>

            </form>


            {{-- Register --}}
            <div class="register-area">

                <span>
                    Belum memiliki akun?
                </span>

                <a
                    href="#"
                    class="register-link"
                >
                    Daftar di sini
                </a>

            </div>

        </div>


        {{-- Footer --}}
        <footer class="login-footer">
            © 2024 Dinas Pendidikan Provinsi Jawa Timur. Hak Cipta Dilindungi.
        </footer>

    </section>

</div>


<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';

            eyeIcon.innerHTML = `
                <path d="M3 3l18 18"/>
                <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                <path d="M9.9 4.2A10.8 10.8 0 0 1 12 4c6.5 0 10 8 10 8a18.4 18.4 0 0 1-3.1 4.2"/>
                <path d="M6.1 6.1C3.5 8.1 2 12 2 12s3.5 8 10 8a9.9 9.9 0 0 0 4.1-.9"/>
            `;
        } else {
            passwordInput.type = 'password';

            eyeIcon.innerHTML = `
                <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>
                <circle cx="12" cy="12" r="2.5"/>
            `;
        }
    }
</script>

</body>
</html>