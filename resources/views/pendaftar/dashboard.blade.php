<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Portal Magang Jatim</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --blue: #0754d8;
            --blue-dark: #06449f;
            --text: #20212a;
            --muted: #505363;
            --page: #faf9ff;
            --line: #d4d4e0;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background: var(--page);
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            position: relative;
            isolation: isolate;
            display: flex;
            flex: 0 0 288px;
            flex-direction: column;
            min-height: 100vh;
            padding: 22px 14px 28px;
            overflow: hidden;
            color: #fff;
            background: var(--blue);
        }

        .sidebar::before,
        .sidebar::after {
            position: absolute;
            z-index: -1;
            content: "";
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.075);
            pointer-events: none;
        }

        .sidebar::before {
            width: 225px;
            height: 225px;
            top: 6px;
            right: -72px;
        }

        .sidebar::after {
            width: 280px;
            height: 280px;
            bottom: -72px;
            left: -82px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 9px;
            min-height: 92px;
            margin-bottom: 30px;
            padding: 0 2px;
        }

        .brand-logo {
            display: flex;
            flex: 0 0 59px;
            align-items: center;
            justify-content: center;
        }

        .brand-logo img {
            display: block;
            width: 58px;
            height: 82px;
            object-fit: contain;
        }

        .brand-text {
            min-width: 0;
            line-height: 1.35;
        }

        .brand-tag {
            display: inline-block;
            margin-bottom: 5px;
            padding: 3px 8px;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .brand-title {
            margin-bottom: 3px;
            font-size: 16px;
            font-weight: 700;
            white-space: nowrap;
        }

        .brand-subtitle {
            font-size: 11px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.83);
        }

        .navigation {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .nav-link,
        .bottom-link {
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 48px;
            padding: 0 14px;
            border-radius: 16px;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.15s ease, color 0.15s ease;
        }

        .nav-link:hover,
        .bottom-link:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .nav-link.active {
            color: var(--blue);
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
        }

        .nav-icon {
            flex: 0 0 19px;
            width: 19px;
            height: 19px;
        }

        .sidebar-bottom {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-top: auto;
            padding-top: 34px;
        }

        /* MAIN AREA */
        .main {
            flex: 1;
            min-width: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 68px;
            padding: 0 32px;
            border-bottom: 1px solid #e1dfeb;
            background: rgba(255, 255, 255, 0.7);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
        }

        .page-title {
            color: var(--blue-dark);
            font-size: 25px;
            font-weight: 700;
        }

        .account {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .account-text {
            text-align: right;
            line-height: 1.35;
        }

        .account-name {
            font-size: 12px;
            font-weight: 700;
            color: #252633;
        }

        .account-status {
            font-size: 12px;
            font-weight: 600;
            color: #505363;
        }

        .account-avatar {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 33px;
            height: 33px;
            border-radius: 50%;
            color: #fff;
            background: var(--blue-dark);
        }

        .account-avatar svg {
            width: 17px;
            height: 17px;
        }

        /* CONTENT */
        .content {
            padding: 27px 30px 40px;
        }

        .welcome-card {
            padding: 22px 24px 23px;
            border: 1px solid #d0cfdb;
            border-radius: 13px;
            background: #fbfaff;
            box-shadow: 0 2px 5px rgba(20, 20, 35, 0.22);
        }

        .period-line {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 7px;
        }

        .period-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 4px 10px;
            border-radius: 999px;
            color: #132653;
            background: #dce2ff;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.1px;
        }

        .period-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #0754d8;
        }

        .period-separator {
            color: #c5c9d8;
            font-size: 14px;
        }

        .welcome-heading {
            margin-bottom: 5px;
            color: #20212a;
            font-size: 27px;
            line-height: 1.18;
            font-weight: 700;
            letter-spacing: -0.7px;
        }

        .welcome-description {
            max-width: 670px;
            color: #505363;
            font-size: 13px;
            line-height: 1.5;
        }

        .start-card {
            position: relative;
            isolation: isolate;
            min-height: 306px;
            margin: 27px 3px 0;
            overflow: hidden;
            border: 1px solid #c9cada;
            border-radius: 13px;
            background: #fbfaff;
            box-shadow: 0 3px 5px rgba(20, 20, 35, 0.2);
        }

        .start-card::after {
            position: absolute;
            z-index: -1;
            top: -10%;
            right: 11%;
            width: 18%;
            height: 120%;
            content: "";
            transform: skewX(-6deg);
            background: #edf0fb;
            pointer-events: none;
        }

        .start-content {
            max-width: 620px;
            padding: 40px;
        }

        .step-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 27px;
            padding: 5px 12px;
            border-radius: 999px;
            color: var(--blue-dark);
            background: #e1e8f8;
            font-size: 12px;
            font-weight: 600;
        }

        .step-badge svg {
            width: 14px;
            height: 14px;
        }

        .start-title {
            margin-bottom: 14px;
            font-size: 24px;
            line-height: 1.3;
            font-weight: 700;
            letter-spacing: -0.3px;
        }

        .start-description {
            max-width: 450px;
            margin-bottom: 30px;
            color: #505363;
            font-size: 14px;
            line-height: 1.45;
        }

        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 48px;
            padding: 0 24px;
            border: 0;
            border-radius: 8px;
            color: #fff;
            background: var(--blue-dark);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.12);
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.15s ease;
        }

        .primary-button:hover {
            background: #053b89;
        }

        .primary-button svg {
            width: 18px;
            height: 18px;
        }

        @media (max-width: 900px) {
            .sidebar {
                flex-basis: 245px;
            }

            .header {
                padding: 0 24px;
            }

            .content {
                padding: 24px;
            }

            .welcome-heading {
                font-size: 29px;
            }

            .start-content {
                padding: 34px;
            }
        }

        @media (max-width: 650px) {
            .dashboard {
                display: block;
            }

            .sidebar {
                min-height: auto;
                padding: 12px;
            }

            .brand {
                min-height: 65px;
                margin-bottom: 12px;
            }

            .brand-logo {
                flex-basis: 43px;
            }

            .brand-logo img {
                width: 42px;
                height: 57px;
            }

            .navigation {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 6px;
            }

            .nav-link {
                min-height: 42px;
                padding: 0 10px;
                border-radius: 10px;
                font-size: 12px;
            }

            .sidebar-bottom {
                margin-top: 8px;
                padding-top: 8px;
            }

            .bottom-link {
                min-height: 38px;
                font-size: 12px;
            }

            .header {
                min-height: 62px;
                padding: 0 16px;
            }

            .page-title {
                font-size: 20px;
            }

            .account-name,
            .account-status {
                font-size: 10px;
            }

            .account-avatar {
                width: 30px;
                height: 30px;
            }

            .content {
                padding: 18px 14px 28px;
            }

            .welcome-card {
                padding: 18px;
            }

            .period-badge {
                font-size: 10px;
            }

            .welcome-heading {
                font-size: 25px;
                letter-spacing: -0.4px;
            }

            .welcome-description {
                font-size: 14px;
            }

            .start-card {
                min-height: 0;
                margin: 18px 0 0;
            }

            .start-card::after {
                right: -8%;
                width: 30%;
                opacity: 0.6;
            }

            .start-content {
                padding: 25px 20px;
            }

            .step-badge {
                margin-bottom: 20px;
            }

            .start-title {
                font-size: 21px;
            }

            .start-description {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
<div class="dashboard">
    <aside class="sidebar">
        <div>
            <div class="brand">
                <div class="brand-logo">
                    <img src="{{ asset('images/logo-dindik-jatim.svg') }}" alt="Logo Dinas Pendidikan Jawa Timur">
                </div>
                <div class="brand-text">
                    <div class="brand-tag">BINDIK JATIM</div>
                    <div class="brand-title">Student Portal</div>
                    <div class="brand-subtitle">Dinas Pendidikan<br>Provinsi Jawa Timur</div>
                </div>
            </div>

            <nav class="navigation">
                <a href="{{ route('dashboard.pendaftar') }}" class="nav-link active">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m3 10 9-7 9 7"></path><path d="M5 9v11h5v-6h4v6h5V9"></path>
                    </svg>
                    <span>Beranda</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 3h9l4 4v14H6z"></path><path d="M15 3v5h4"></path><path d="M9 13h6M9 17h6"></path>
                    </svg>
                    <span>Dokumen Magang</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9"></circle><path d="m12 6 1.8 3.7 4.1.6-3 2.9.7 4.1-3.6-1.9-3.6 1.9.7-4.1-3-2.9 4.1-.6z"></path>
                    </svg>
                    <span>Surat Keterangan</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="8" r="3.2"></circle><path d="M4.5 20c.5-4 3-6 7.5-6s7 2 7.5 6z"></path>
                    </svg>
                    <span>Profil</span>
                </a>
            </nav>
        </div>

        <div class="sidebar-bottom">
            <a href="#" class="bottom-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="9"></circle><path d="M9.6 9a2.5 2.5 0 1 1 4.1 1.9c-1.2.8-1.7 1.3-1.7 2.6"></path><path d="M12 17.2h.01"></path>
                </svg>
                <span>Bantuan</span>
            </a>

            <a href="#" class="bottom-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M10 17l5-5-5-5"></path><path d="M15 12H3"></path><path d="M14 5h5v14h-5"></path>
                </svg>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <main class="main">
        <header class="header">
            <h1 class="page-title">Peserta Aktif</h1>

            <div class="account">
                <div class="account-text">
                    <div class="account-name">{{ $user->name }}</div>
                    <div class="account-status">Mahasiswa Terdaftar</div>
                </div>
                <div class="account-avatar" aria-label="Akun pengguna">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="8" r="3.2"></circle><path d="M5 20c.5-4 2.8-6 7-6s6.5 2 7 6"></path>
                    </svg>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="welcome-card">
                <div class="period-line">
                    <span class="period-badge"><span class="period-dot"></span>Periode Pendaftaran Aktif Semester Ganjil</span>
                    <span class="period-separator" aria-hidden="true">•</span>
                </div>

                <h2 class="welcome-heading">Selamat Datang, {{ $user->name }}!</h2>
                <p class="welcome-description">
                    Pantau status pendaftaran dan informasi seleksi di lingkungan<br class="desktop-break">
                    Dinas Pendidikan Provinsi Jawa Timur secara transparan dan terpadu.
                </p>
            </div>

            <div class="start-card">
                <div class="start-content">
                    <div class="step-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m4 15 5-5 5 5-5 5z"></path><path d="M9 10 13 6c2-2 5-2 7-2 0 2 0 5-2 7l-4 4"></path><path d="m14 6 4 4"></path>
                        </svg>
                        <span>Langkah Awal</span>
                    </div>

                    <h2 class="start-title">Mulai Pendaftaran Magang Anda Hari Ini</h2>
                    <p class="start-description">
                        Telusuri berbagai program magang yang tersedia di instansi pemerintahan Jawa Timur dan temukan yang sesuai dengan jurusan Anda.
                    </p>

                    <a href="#" class="primary-button">
                        <span>Cari Program</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h13"></path><path d="m13 6 6 6-6 6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>
