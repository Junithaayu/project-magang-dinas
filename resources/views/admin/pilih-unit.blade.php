
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih & Kelola Unit Kerja Magang</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --blue: #2563eb;
            --navy: #172033;
            --muted: #8b9bb5;
            --page: #f7f6ff;
            --line: #e0e7f1;
        }

        body {
            min-height: 100vh;
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            color: var(--navy);
            background: var(--page);
            font-size: 13px;
        }

        /* HEADER */
        .topbar {
            height: 66px;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0 29px;
            background: #fff;
            border-bottom: 1px solid #e5e5ed;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .18);
            
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            width: 33px;
            height: 43px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .brand {
            min-width: 0;
        }

        .brand-line {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 9px;
        }

        .brand h1 {
            color: #172033;
            font-size: 16px;
            line-height: 1.35;
            font-weight: 750;
            letter-spacing: -.35px;
        }

        .portal-badge {
            padding: 4px 10px;
            border: 1px solid #cfe0ff;
            border-radius: 20px;
            color: #1558ff;
            background: #f1f6ff;
            font-size: 12px;
            white-space: nowrap;
        }

        .brand p {
            margin-top: 1px;
            color: #647795;
            font-size: 12px;
            line-height: 1.4;
        }

        /* MAIN */
        .container {
            width: 100%;
            padding: 35px 35px 44px;
        }

        .intro {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 17px;
        }

        .intro-main {
            min-width: 0;
        }

        .intro h2 {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 5px;
            color: #182238;
            font-size: 18px;
            line-height: 1.35;
            font-weight: 750;
            letter-spacing: -.35px;
        }

        .building-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            color: #2563ff;
        }

        .intro p {
            color: #73839e;
            font-size: 12px;
            line-height: 1.5;
        }

        .unit-total {
            flex-shrink: 0;
            color: #8b9bb5;
            font-size: 12px;
            white-space: nowrap;
        }

        /* UNIT CARDS */
        .unit-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .unit-card {
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: 592px;
            overflow: hidden;
            background: #fff;
            border: 1px solid #e0e7f1;
            border-radius: 16px;
            box-shadow: 0 1px 2px rgba(26, 43, 77, .06);
        }

        .unit-card.featured {
            border: 2px solid #a9caff;
        }

        .unit-hero {
            height: 128px;
            flex-shrink: 0;
            padding: 16px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            color: #fff;
        }

        .hero-center {
            background: linear-gradient(112deg, #2050d4 0%, #303080 100%);
        }

        .hero-tik {
            background: linear-gradient(112deg, #2c63ff 0%, #3031b4 100%);
        }

        .hero-ptkk {
            background: linear-gradient(112deg, #29374a 0%, #302b7e 100%);
        }

        .unit-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            min-height: 20px;
            padding: 3px 9px;
            border-radius: 20px;
            color: #fff;
            background: rgba(255, 255, 255, .22);
            font-size: 10px;
            line-height: 1.2;
        }

        .unit-badge svg {
            width: 12px;
            height: 12px;
            flex-shrink: 0;
        }

        .unit-hero h3 {
            margin-top: auto;
            margin-bottom: 4px;
            font-size: 15px;
            line-height: 1.35;
            font-weight: 750;
            letter-spacing: -.25px;
        }

        .unit-address {
            display: flex;
            align-items: center;
            gap: 4px;
            color: rgba(255, 255, 255, .85);
            font-size: 11px;
            line-height: 1.35;
        }

        .unit-address svg {
            width: 12px;
            height: 12px;
            flex-shrink: 0;
        }

        .unit-details {
            display: flex;
            flex: 1;
            flex-direction: column;
            min-height: 0;
            padding: 21px 20px 20px;
        }

        .detail-title {
            margin-bottom: 8px;
            color: #8b9bb5;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .6px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            align-content: flex-start;
            gap: 6px;
        }

        .tag {
            display: inline-block;
            padding: 4px 8px;
            border: 1px solid #dfe6ef;
            border-radius: 6px;
            background: #f0f4f9;
            color: #34445c;
            font-size: 11px;
            line-height: 1.2;
            white-space: nowrap;
        }

        .tag.blue {
            border-color: #d0e0ff;
            background: #eff5ff;
            color: #1558ff;
        }

        .unit-action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            min-height: 36px;
            margin-top: auto;
            padding: 8px 12px;
            border: 0;
            border-radius: 12px;
            color: #fff;
            background: #2563eb;
            text-decoration: none;
            text-align: center;
            font-family: inherit;
            font-size: 12px;
            font-weight: 650;
            cursor: pointer;
            transition: filter .15s ease;
        }

        .unit-action:hover {
            filter: brightness(.94);
        }

        .unit-action svg {
            width: 15px;
            height: 15px;
        }

        .action-tik {
            background: #214de0;
        }

        .action-ptkk {
            background: #1e293b;
        }

        .unit-action.disabled {
            background: #e9edf4;
            color: #68758a;
            cursor: not-allowed;
        }

        /* ACCESS NOTICE */
        .access-note {
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 51px;
            margin: 52px 6px 0;
            padding: 12px 16px;
            border: 1px solid #c9ddff;
            border-radius: 12px;
            background: #f0f5ff;
            color: #183d91;
            font-size: 12px;
            line-height: 1.6;
        }

        .info-icon {
            display: flex;
            flex-shrink: 0;
            color: #2563ff;
        }

        .info-icon svg {
            width: 17px;
            height: 17px;
        }

        .access-message {
            flex: 1;
            min-width: 0;
            font-weight: 600;
        }

        .guide-link {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            flex-shrink: 0;
            color: #154fff;
            text-decoration: none;
            font-weight: 650;
            white-space: nowrap;
        }

        .guide-link svg {
            width: 13px;
            height: 13px;
        }

        /* RESPONSIVE */
        @media (min-width: 1500px) {
            .container {
                padding-right: 3%;
                padding-left: 3%;
            }
        }

        @media (max-width: 1000px) {
            .container {
                padding: 28px 24px 36px;
            }

            .unit-grid {
                gap: 16px;
            }

            .unit-card {
                height: 560px;
            }

            .unit-hero {
                padding: 14px;
            }

            .unit-hero h3 {
                font-size: 14px;
            }

            .unit-details {
                padding: 18px 14px;
            }

            .access-note {
                margin-top: 32px;
            }
        }

        @media (max-width: 700px) {
            .topbar {
                height: auto;
                min-height: 66px;
                padding: 12px 18px;
            }

            .brand h1 {
                font-size: 14px;
            }

            .brand p {
                font-size: 11px;
            }

            .container {
                padding: 26px 18px 30px;
            }

            .intro {
                align-items: flex-start;
                flex-direction: column;
                gap: 8px;
            }

            .unit-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .unit-card {
                height: 400px;
            }

            .unit-hero {
                height: 128px;
                padding: 16px;
            }

            .unit-details {
                padding: 20px;
            }

            .access-note {
                align-items: flex-start;
                flex-wrap: wrap;
                margin: 25px 0 0;
            }

            .access-message {
                flex-basis: calc(100% - 35px);
            }

            .guide-link {
                margin-left: 29px;
            }
        }
    </style>
</head>

<body>
    <header class="topbar">
        <img
            class="logo"
            src="{{ asset('images/logo-dindik-jatim.svg') }}"
            alt="Logo Dinas Pendidikan Jawa Timur"
        >

        <div class="brand">
            <div class="brand-line">
                <h1>Dinas Pendidikan Provinsi Jawa Timur</h1>
                <span class="portal-badge">Portal Magang</span>
            </div>
            <p>Gerbang Terpadu Sistem Seleksi &amp; Monitoring Magang Siswa/Mahasiswa</p>
        </div>
    </header>

    <main class="container">
        <section class="intro">
            <div class="intro-main">
                <h2>
                    <svg class="building-icon" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <rect x="3" y="4" width="13" height="17"></rect>
                        <path d="M7 8h2M7 12h2M7 16h2M12 8h1M12 12h1M12 16h1M16 10h5v11h-5"></path>
                        <path d="M18 14h1M18 17h1"></path>
                    </svg>
                    Pilih &amp; Kelola Unit Kerja Magang
                </h2>
                <p>Setiap unit memiliki beranda operasional dan wewenang alur seleksi yang spesifik.</p>
            </div>
            <div class="unit-total">Total 3 Satuan Kerja Tersedia</div>
        </section>

        <section class="unit-grid">
            <!-- KANTOR PUSAT -->
            <article class="unit-card">
                <div class="unit-hero hero-center">
                    <span class="unit-badge">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M3 10h18M5 10V21M19 10V21M3 21h18M7 10V6l5-3 5 3v4"></path>
                            <path d="M9 14h2M14 14h2M9 18h2M14 18h2"></path>
                        </svg>
                        Kantor Pusat
                    </span>
                    <h3>Dinas Pendidikan Provinsi Jawa Timur</h3>
                    <p class="unit-address">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.5"></circle>
                        </svg>
                        Jl. Gentengkali No. 33 Surabaya
                    </p>
                </div>

                <div class="unit-details">
                    <p class="detail-title">SUB-BIDANG PENEMPATAN:</p>
                    <div class="tags">
                        <span class="tag">Sekretariat</span>
                        <span class="tag">Bidang SMA</span>
                        <span class="tag">Bidang SMK</span>
                        <span class="tag">Bidang PK-PLK</span>
                        <span class="tag">Bidang GTK</span>
                    </div>

                    @if (auth()->user()->role === 'admin_pusat')
                        <a href="{{ route('dashboard.admin') }}" class="unit-action">
                            Masuk &amp; Kelola Unit
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    @else
                        <span class="unit-action disabled">Khusus Admin Pusat</span>
                    @endif
                </div>
            </article>

            <!-- UPT TIKP -->
            <article class="unit-card featured">
                <div class="unit-hero hero-tik">
                    <span class="unit-badge">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M4 4h16v12H4zM8 20h8M12 16v4"></path>
                        </svg>
                        Pelaksana Teknis
                    </span>
                    <h3>UPT TIKP</h3>
                    <p class="unit-address">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.5"></circle>
                        </svg>
                        Jl. Jagir Wonokromo No. 356 Surabaya
                    </p>
                </div>

                <div class="unit-details">
                    <p class="detail-title">BIDANG KEAHLIAN TEKNIS:</p>
                    <div class="tags">
                        <span class="tag blue">Rekayasa Perangkat Lunak</span>
                        <span class="tag blue">Jaringan &amp; Server</span>
                        <span class="tag blue">Multimedia Edukasi</span>
                    </div>

                    @if (auth()->user()->role === 'admin_upt_tik')
                        <a href="{{ route('dashboard.admin.upt-tik') }}"
                           class="unit-action action-tik">
                            Masuk &amp; Kelola Unit
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    @else
                        <span class="unit-action disabled">Khusus Admin UPT TIK</span>
                    @endif
                </div>
            </article>

            <!-- UPT PTKK -->
            <article class="unit-card">
                <div class="unit-hero hero-ptkk">
                    <span class="unit-badge">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="m14 7 3-3 3 3-3 3M4 20l9-9M6 6l12 12M5 5l2-2 4 4-2 2z"></path>
                        </svg>
                        Balai Kejuruan
                    </span>
                    <h3>UPT PTKK</h3>
                    <p class="unit-address">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.5"></circle>
                        </svg>
                        Jl. Ketintang No.25, Surabaya
                    </p>
                </div>

                <div class="unit-details">
                    <p class="detail-title">FOKUS PROGRAM:</p>
                    <div class="tags">
                        <span class="tag">Teknik Terapan</span>
                        <span class="tag">Ketatausahaan</span>
                        <span class="tag">Pelayanan Publik</span>
                    </div>

                    <span class="unit-action disabled">Belum tersedia</span>
                </div>
            </article>
        </section>

        <aside class="access-note">
            <span class="info-icon">
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 11v5M12 7h.01"></path>
                </svg>
            </span>

            <p class="access-message">
                Informasi Hak Akses: Verifikasi kelengkapan dokumen awal seluruh pendaftar
                dilakukan oleh tim Sekretariat Pusat sebelum didistribusikan ke masing-masing UPT.
            </p>

            <a href="#" class="guide-link">
                Panduan Alur Sistem
                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8"
                     stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <path d="M14 4h6v6M20 4l-9 9"></path>
                    <path d="M18 13v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6"></path>
                </svg>
            </a>
        </aside>
    </main>
</body>
</html>
