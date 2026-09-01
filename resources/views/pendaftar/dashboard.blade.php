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

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: #f8f8ff;
            color: #20222d;
        }

        .dashboard {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #06449f;
            color: white;

            display: flex;
            flex-direction: column;

            padding: 24px 14px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 10px;
            margin-bottom: 24px;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
        }

        .brand-logo img {
            width: 34px;
            height: 34px;
        }

        .brand-name {
            font-size: 25px;
        }

        .brand-region {
            font-size: 11px;
            letter-spacing: 0.2px;
        }

        /* Navigation */

        .navigation {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .nav-link {
            height: 40px;

            display: flex;
            align-items: center;
            gap: 11px;

            padding: 0 12px;

            border-radius: 7px;

            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;

            font-size: 13px;

            transition: background 0.15s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .nav-link.active {
            background: #438df5;
            color: #ffffff;
        }

        .nav-icon {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        /* Bottom menu */

        .sidebar-bottom {
            margin-top: auto;
        }

        .help-button {
            height: 38px;

            margin: 0 4px 20px;

            border-radius: 7px;

            background: #075bd1;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;

            color: white;
            text-decoration: none;

            font-size: 11px;
            font-weight: 600;
        }

        .sidebar-divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.18);

            margin-bottom: 18px;
        }

        .bottom-link {
            height: 48px;

            display: flex;
            align-items: center;
            gap: 13px;

            padding: 0 15px;

            color: rgba(255, 255, 255, 0.82);
            text-decoration: none;

            font-size: 13px;
        }

        /* =========================
           MAIN AREA
        ========================== */

        .main {
            flex: 1;
            min-width: 0;
        }

        /* Header */

        .header {
            height: 64px;

            display: flex;
            align-items: center;

            padding: 0 28px;

            border-bottom: 1px solid #cfd2df;

            background: #f9f9ff;
        }

        .portal-title {
            color: #06449f;
            font-size: 19px;
            font-weight: 700;
        }

        .header-right {
            margin-left: auto;

            display: flex;
            align-items: center;
            gap: 26px;
        }

        /* Search */

        .search {
            width: 235px;
            height: 36px;

            display: flex;
            align-items: center;
            gap: 10px;

            padding: 0 12px;

            border: 1px solid #c6cadd;
            border-radius: 22px;

            background: #f5f5fc;
        }

        .search svg {
            width: 16px;
            height: 16px;
            color: #404452;
        }

        .search input {
            width: 100%;

            border: none;
            outline: none;
            background: transparent;

            font-family: inherit;
            font-size: 13px;
            color: #30323d;
        }

        .search input::placeholder {
            color: #737789;
        }

        .header-icon {
            width: 21px;
            height: 21px;

            color: #30323d;

            position: relative;
        }

        .notification-dot {
            position: absolute;

            width: 8px;
            height: 8px;

            top: -2px;
            right: -3px;

            background: #c51f2c;
            border-radius: 50%;
        }

        .header-divider {
            width: 1px;
            height: 33px;
            background: #cbd0df;
        }

        .avatar {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            background: #dfe4ee;
            color: #06449f;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 700;

            overflow: hidden;
        }

        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 28px 30px;
        }

        .welcome-heading {
            font-size: 27px;
            line-height: 1.2;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .welcome-description {
            max-width: 700px;
            font-size: 14px;
            line-height: 1.5;
        }
        /* Dashboard grid */

        .dashboard-grid {
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(240px, 0.9fr);
            gap: 20px;

            margin-top: 28px;
        }

        /* Start registration card */

        .start-card {
            min-height: 350px;

            position: relative;
            overflow: hidden;

            border: 1px solid #c4c9dc;
            border-radius: 12px;

            background: #f0f1fc;
        }

        .start-card::after {
            content: "";

            position: absolute;

            width: 42%;
            height: 120%;

            top: -10%;
            right: -5%;

            background: #e4e7f5;

            transform: skewX(-7deg);

            pointer-events: none;
        }

        .start-content {
            position: relative;
            z-index: 2;

            padding: 32px 34px;
        }

        .step-badge {
            width: fit-content;

            display: flex;
            align-items: center;
            gap: 7px;

            padding: 6px 13px;

            border-radius: 999px;

            background: #dce5fa;
            color: #06449f;

            font-size: 12px;
            font-weight: 600;

            margin-bottom: 27px;
        }

        .step-badge svg {
            width: 14px;
            height: 14px;
        }

        .start-title {
            font-size: 22px;
            line-height: 1.25;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .start-description {
            max-width: 500px;
            font-size: 13px;
            line-height: 1.5;
            color: #505361;
            margin-bottom: 25px;
        }

        .primary-button {
            height: 40px;

            padding: 0 18px;

            display: inline-flex;
            align-items: center;
            gap: 7px;

            border: none;
            border-radius: 7px;

            background: #06449f;
            color: white;

            font-size: 12px;
            font-weight: 600;

            text-decoration: none;
            cursor: pointer;
        }

        .primary-button svg {
            width: 18px;
            height: 18px;
        }

        /* Right cards */

        .right-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .info-card {
            border: 1px solid #c4c9dc;
            border-radius: 12px;
            background: #ffffff;
            padding: 22px 22px;
        }

        .profile-card {
            min-height: 145px;
        }

        .info-title {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .completion-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 9px;

            color: #555866;
            font-size: 13px;
        }

        .completion-value {
            color: #06449f;
            font-weight: 700;
        }

        .progress-track {
            height: 8px;

            background: #dfe1eb;
            border-radius: 999px;

            overflow: hidden;

            margin-bottom: 24px;
        }

        .progress-bar {
            width: 25%;
            height: 100%;

            background: #06449f;
            border-radius: 999px;
        }

        .outline-button {
            width: 100%;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 2px solid #06449f;
            border-radius: 7px;

            background: transparent;
            color: #06449f;

            font-family: inherit;
            font-size: 13px;
            font-weight: 600;

            text-decoration: none;
        }

        /* Important information */

        .important-card {
            min-height: 207px;
        }

        .important-title {
            display: flex;
            align-items: center;
            gap: 9px;

            font-size: 20px;
            font-weight: 700;

            margin-bottom: 19px;
        }

        .important-title svg {
            width: 21px;
            height: 21px;
        }

        .empty-notification {
            min-height: 114px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 17px;

            border: 1px dashed #9fbaff;
            border-radius: 7px;

            background: #f0f1ff;

            text-align: center;

            color: #505361;

            font-size: 13px;
            line-height: 1.5;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1050px) {
            .sidebar {
                width: 230px;
            }

            .brand {
                padding-left: 10px;
                padding-right: 10px;
            }

            .brand-name {
                font-size: 21px;
            }

            .content {
                padding-left: 24px;
                padding-right: 24px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .right-column {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 76px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .brand {
                justify-content: center;
                padding: 10px 0;
            }

            .brand-text {
                display: none;
            }

            .nav-link {
                justify-content: center;
                padding: 0;
            }

            .nav-link span {
                display: none;
            }

            .bottom-link {
                justify-content: center;
                padding: 0;
            }

            .bottom-link span {
                display: none;
            }

            .help-button span {
                display: none;
            }

            .header {
                padding: 0 20px;
            }

            .search {
                width: 190px;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                display: none;
            }

            .header {
                height: auto;
                min-height: 65px;
                padding: 13px 16px;
            }

            .portal-title {
                font-size: 17px;
            }

            .header-right {
                gap: 12px;
            }

            .search {
                display: none;
            }

            .content {
                padding: 25px 17px;
            }

            .welcome-heading {
                font-size: 26px;
            }

            .welcome-description {
                font-size: 14px;
            }

            .dashboard-grid {
                margin-top: 27px;
            }

            .right-column {
                display: flex;
            }

            .start-card {
                min-height: 370px;
            }

            .start-content {
                padding: 30px 25px;
            }
        }
    </style>
</head>

<body>

<div class="dashboard">

    {{-- =========================
         SIDEBAR
    ========================== --}}
    <aside class="sidebar">

        <div>

            {{-- Brand --}}
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


            {{-- Navigation --}}
            <nav class="navigation">

                <a
                    href="{{ route('dashboard.pendaftar') }}"
                    class="nav-link active"
                >
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="3" width="7" height="7" fill="currentColor"/>
                        <rect x="14" y="3" width="7" height="7" fill="currentColor"/>
                        <rect x="3" y="14" width="7" height="7" fill="currentColor"/>
                        <rect x="14" y="14" width="7" height="7" fill="currentColor"/>
                    </svg>

                    <span>Beranda</span>
                </a>


                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="7" width="18" height="13" rx="1"/>
                        <path d="M8 7V4h8v3"/>
                    </svg>

                    <span>Pilih Program</span>
                </a>


                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 3h9l4 4v14H6z"/>
                        <path d="M15 3v5h4"/>
                        <path d="M9 13h6"/>
                        <path d="M9 17h6"/>
                    </svg>

                    <span>Dokumen Magang</span>
                </a>


                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <circle cx="12" cy="9" r="3"/>
                        <path d="M6.8 18c.9-2.4 2.7-3.6 5.2-3.6s4.3 1.2 5.2 3.6"/>
                    </svg>

                    <span>Profil</span>
                </a>

            </nav>

        </div>


        {{-- Bottom --}}
        <div class="sidebar-bottom">

            <a href="#" class="help-button">

                <svg width="15" height="15" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 17a8 8 0 0 1 16 0"/>
                    <path d="M6 17v-2a6 6 0 0 1 12 0v2"/>
                    <path d="M4 17h3v3H4z"/>
                    <path d="M17 17h3v3h-3z"/>
                </svg>

                <span>Bantuan Teknis</span>

            </a>


            <div class="sidebar-divider"></div>


            <a href="#" class="bottom-link">

                <svg width="17" height="17" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1-1.4 1.4-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.5v.2h-2v-.2a1.7 1.7 0 0 0-1-1.5 1.7 1.7 0 0 0-1.9.3l-.1.1L9 17l.1-.1A1.7 1.7 0 0 0 9.4 15a1.7 1.7 0 0 0-1.5-1H7.7v-2h.2a1.7 1.7 0 0 0 1.5-1 1.7 1.7 0 0 0-.3-1.9L9 9l1.4-1.4.1.1a1.7 1.7 0 0 0 1.9.3 1.7 1.7 0 0 0 1-1.5v-.2h2v.2a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.9-.3l.1-.1L20 9l-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.5 1h.2v2h-.2a1.7 1.7 0 0 0-1.7 1z"/>
                </svg>

                <span>Pengaturan</span>

            </a>


            <a href="#" class="bottom-link">

                <svg width="17" height="17" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 10v6"/>
                    <circle cx="12" cy="7" r=".7" fill="currentColor"/>
                </svg>

                <span>Tentang</span>

            </a>


            <a href="#" class="bottom-link">

                <svg width="17" height="17" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 17l5-5-5-5"/>
                    <path d="M15 12H3"/>
                    <path d="M14 5h5v14h-5"/>
                </svg>

                <span>Keluar</span>

            </a>

        </div>

    </aside>


    {{-- =========================
         MAIN
    ========================== --}}
    <main class="main">

        {{-- Header --}}
        <header class="header">

            <div class="portal-title">
                Portal Magang Jatim
            </div>

            <div class="header-right">

                {{-- Search --}}
                <div class="search">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="M16 16l5 5"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Cari program..."
                    >

                </div>


                {{-- Notification --}}
                <div class="header-icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                        <path d="M10 21h4"/>
                    </svg>

                    <span class="notification-dot"></span>

                </div>


                {{-- Help --}}
                <div class="header-icon">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M9.7 9a2.5 2.5 0 1 1 4.1 1.9c-1.2.9-1.8 1.3-1.8 2.6"/>
                        <circle cx="12" cy="17" r=".7" fill="currentColor"/>
                    </svg>

                </div>


                <div class="header-divider"></div>


                {{-- Avatar --}}
                <div class="avatar">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>

            </div>

        </header>


        {{-- Content --}}
        <section class="content">

            <h1 class="welcome-heading">
                Selamat Datang, {{ $user->name }}! 
            </h1>

            <p class="welcome-description">
                Portal Magang Jatim siap membantu Anda menemukan pengalaman kerja terbaik di lingkungan pemerintahan. Mari mulai perjalanan Anda.
            </p>


            <div class="dashboard-grid">

                {{-- Start registration --}}
                <div class="start-card">

                    <div class="start-content">

                        <div class="step-badge">

                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M12 3l2.3 4.7L19 10l-4.7 2.3L12 17l-2.3-4.7L5 10l4.7-2.3z"/>
                                <path d="M19 3v4"/>
                                <path d="M21 5h-4"/>
                            </svg>

                            <span>Langkah Awal</span>

                        </div>


                        <h2 class="start-title">
                            Mulai Pendaftaran Magang Anda Hari Ini
                        </h2>


                        <p class="start-description">
                            Telusuri berbagai program magang yang tersedia di instansi pemerintahan Jawa Timur dan temukan yang sesuai dengan jurusan Anda.
                        </p>


                        <a href="#" class="primary-button">

                            <span>Cari Program</span>

                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M5 12h13"/>
                                <path d="M13 6l6 6-6 6"/>
                            </svg>

                        </a>

                    </div>

                </div>


                {{-- Right column --}}
                <div class="right-column">

                    {{-- Profile --}}
                    <div class="info-card profile-card">

                        <h2 class="info-title">
                            Status Profil
                        </h2>

                        <div class="completion-row">

                            <span>Kelengkapan Data</span>

                            <span class="completion-value">
                                25%
                            </span>

                        </div>

                        <div class="progress-track">
                            <div class="progress-bar"></div>
                        </div>

                        <a href="#" class="outline-button">
                            Lengkapi Profil
                        </a>

                    </div>


                    {{-- Important --}}
                    <div class="info-card important-card">

                        <h2 class="important-title">

                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8"
                                 stroke-linecap="round">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 10v6"/>
                                <circle cx="12" cy="7" r=".7" fill="currentColor"/>
                            </svg>

                            <span>Informasi Penting</span>

                        </h2>


                        <div class="empty-notification">
                            Belum ada notifikasi baru.<br>
                            Silakan lengkapi profil Anda<br>
                            terlebih dahulu untuk mulai<br>
                            mendaftar.
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>