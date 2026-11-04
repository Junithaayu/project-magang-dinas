
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin Pusat - Dindik Jatim</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
:root{--blue:#0756d9;--bright:#2864f0;--ink:#151e32;--muted:#8495b1;--line:#e3eaf4;--page:#faf8ff}
body{font-family:Inter,"Segoe UI",Arial,sans-serif;background:var(--page);color:var(--ink);font-size:13px}
.layout{display:flex;min-height:100vh}
.sidebar{position:relative;isolation:isolate;overflow:hidden;display:flex;flex-direction:column;flex-shrink:0;width:288px;min-height:100vh;padding:22px 12px;background:#0755d8;color:#fff}
.sidebar:before,.sidebar:after{position:absolute;z-index:-1;content:"";width:250px;height:250px;border-radius:50%;background:rgba(255,255,255,.075)}
.sidebar:before{top:6px;right:-105px}
.sidebar:after{bottom:-125px;left:-52px;width:250px;height:350px}
.brand{display:flex;align-items:center;gap:8px;min-height:83px;margin-bottom:29px}
.brand img{width:62px;height:84px;object-fit:contain}
.brand h2{font-size:16px;margin-bottom:5px;white-space:nowrap}
.brand p{font-size:11px;line-height:1.8;color:#dce8ff}
.menu{display:flex;flex-direction:column;gap:7px}
.menu a{display:flex;align-items:center;gap:13px;min-height:45px;padding:11px 14px;border-radius:12px;color:#f1f5ff;text-decoration:none;font-size:14px}
.menu a.active{background:#fff;color:#0755d8;font-weight:600}
.mi{display:inline-flex;width:18px;height:18px;align-items:center;justify-content:center;flex-shrink:0}
.mi svg{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.bottom{margin-top:auto;padding-top:30px}
.main{flex:1;min-width:0}
.topbar{height:68px;display:flex;align-items:center;padding:0 32px;background:#fff;box-shadow:0 2px 5px #0002}
.topbar h1{color:#06439c;font-size:25px;letter-spacing:-.5px;font-weight:750}
.content{padding:22px 32px 34px}
.welcome{display:flex;align-items:center;justify-content:space-between;gap:18px;margin-bottom:24px}
.status{display:inline-flex;align-items:center;gap:8px;padding:5px 12px;margin-bottom:10px;border:1px solid #d4e3ff;border-radius:30px;background:#eff5ff;color:#155bff;font-size:12px}
.dot{width:8px;height:8px;border-radius:50%;background:#2867f5;flex-shrink:0}
.welcome h2{font-size:24px;letter-spacing:-.6px;margin-bottom:5px}
.welcome p{color:#71809a;font-size:12px;line-height:1.6}
.actions{display:flex;align-items:center;gap:10px;flex-shrink:0}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;min-height:39px;padding:10px 15px;border:1px solid #e0e7f1;border-radius:25px;background:#fff;color:#34445c;font:inherit;font-size:12px;text-decoration:none;white-space:nowrap;box-shadow:0 1px 2px #142c5010}
.btn.primary{background:#2863ef;border-color:#2863ef;color:white}
.btn svg{width:15px;height:15px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
/* FILTER GLOBAL */
.global-filter {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
    padding: 18px 20px;
    margin-bottom: 24px;
    border: 1px solid var(--line);
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 1px 2px #142c5008;
}

.filter-heading {
    display: flex;
    align-items: center;
    gap: 7px;
    color: #34445c;
    font-size: 12px;
    font-weight: 650;
    white-space: nowrap;
}

.filter-heading svg {
    width: 16px;
    height: 16px;
    fill: none;
    stroke: #2864ff;
    stroke-width: 1.8;
}

.filter-divider {
    width: 1px;
    height: 25px;
    background: var(--line);
}

.filter-group {
    display: flex;
    align-items: center;
    gap: 8px;
}

.filter-group label {
    color: #8495b1;
    font-size: 11px;
    white-space: nowrap;
}

.filter-group select {
    min-width: 145px;
    height: 36px;
    padding: 0 28px 0 11px;
    border: 1px solid #e1e7f0;
    border-radius: 8px;
    background: #f9fafc;
    color: #34445c;
    font-family: inherit;
    font-size: 11px;
    outline: none;
    cursor: pointer;
}

.filter-group select:focus {
    border-color: #2864ff;
}

.filter-reset {
    padding: 8px 12px;
    border: 0;
    border-radius: 8px;
    background: #f1f4f8;
    color: #52647e;
    font-family: inherit;
    font-size: 11px;
    cursor: pointer;
}

.filter-status {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #8495b1;
    font-size: 11px;
}

.filter-status .dot {
    width: 6px;
    height: 6px;
    background: #12b981;
}

@media(max-width:900px) {
    .global-filter {
        align-items: flex-start;
    }

    .filter-divider {
        display: none;
    }

    .filter-group {
        flex-wrap: wrap;
    }
}

@media(max-width:600px) {
    .global-filter {
        flex-direction: column;
        align-items: stretch;
    }

    .filter-group {
        justify-content: space-between;
    }

    .filter-group select {
        flex: 1;
        min-width: 0;
    }
}
.stats {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 24px;
}

.stat {
    min-width: 0;
    min-height: 110px;
    padding: 14px 16px;
    border: 1px solid var(--line);
    border-radius: 15px;
    background: white;
    box-shadow: 0 1px 2px #142c5008;
}
.stat-top{display:flex;align-items:center;justify-content:space-between;gap:8px}
.stat-label{color:#8a9bb6;font-size:12px}
.stat-icon{display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:13px;background:#edf5ff;color:#2465ff;flex-shrink:0}
.stat-icon svg{width:20px;height:20px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
.stat-value {
    margin-top: 7px;
    font-size: 23px;
    font-weight: 750;
    letter-spacing: -.5px;
}
.stat-foot {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 4px;
    color: #71809a;
    font-size: 10px;
    line-height: 1.4;
}
.stat.urgent{border-color:#ffcbd3}
.stat.urgent .stat-label,.stat.urgent .stat-value,.stat.urgent .stat-foot{color:#f01f49}
.stat.urgent .stat-icon{background:#ffe5e9;color:#f01f49}
.stat.interview .stat-icon{background:#f8efff;color:#a12bff}
.stat.success .stat-icon{background:#eafbf2;color:#00a66a}
.green{color:#00a66a}
.lower{display:grid;grid-template-columns:minmax(0,1.25fr) minmax(320px,1fr);gap:28px;align-items:start}
.panel{padding:24px;border:1px solid var(--line);border-radius:17px;background:#fff;box-shadow:0 1px 2px #142c5008}
.panel-heading{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:4px}
.panel-heading h3{display:flex;align-items:center;gap:9px;font-size:16px;letter-spacing:-.3px}
.panel-heading h3 svg{width:20px;height:20px;fill:none;stroke:#2864ff;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}
.panel-sub{color:#7d8da7;font-size:12px;line-height:1.6;margin-bottom:18px}
.sync{display:inline-flex;align-items:center;gap:7px;padding:5px 12px;border:1px solid #d6e5ff;border-radius:20px;background:#eff5ff;color:#155bff;font-size:12px;white-space:nowrap}
.sync .dot{width:6px;height:6px}
.units{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px}
.unit{padding:16px;border:1px solid #d8e5ff;border-radius:12px;background:#fcfdff}
.unit-top{display:flex;align-items:center;justify-content:space-between;gap:8px}
.unit h4{font-size:12px;font-weight:650}
.pill{padding:5px 9px;border-radius:20px;background:#dceaff;color:#1857eb;font-size:10px;font-weight:650;white-space:nowrap}
.unit.tik .pill{background:#e2e6ff;color:#5044df}
.unit.ptkk{border-color:#e2e8f1;background:#fcfcfd}
.unit.ptkk .pill{background:#e3e9f1;color:#34445c}
.unit-number{display:flex;align-items:center;justify-content:space-between;gap:6px;margin:14px 0 12px}
.unit-number strong{font-size:22px;letter-spacing:-.5px;color:#1b2851}
.unit-number span{font-size:11px;color:#657792;white-space:nowrap}
.bar{height:6px;border-radius:10px;background:#dce7fb;overflow:hidden}
.bar span{display:block;height:100%;width:45%;border-radius:10px;background:#2864f5}
.tik .bar span{width:43%;background:#5145f5}
.ptkk .bar{background:#e1e7f0}
.ptkk .bar span{width:43%;background:#34445c}
.unit-foot{margin-top:13px;color:#70819b;font-size:10px;line-height:1.6;white-space:nowrap}
.unit-foot strong{color:#1e4fe7}
.ptkk .unit-foot strong{color:#34445c}
.allocation{margin-top:20px;padding-top:20px;border-top:1px solid #e4eaf3}
.allocation-title{display:flex;align-items:center;justify-content:space-between;gap:8px;margin-bottom:13px}
.allocation-title h4{display:flex;align-items:center;gap:7px;font-size:13px}
.allocation-title h4 svg{width:16px;height:16px;stroke:#2864ff;fill:none;stroke-width:1.8}
.total-pill{padding:4px 10px;border-radius:15px;background:#eff3f8;color:#62748e;font-size:11px;white-space:nowrap}
.allocation-grid{display:flex;flex-wrap:wrap;gap:12px 26px;padding:0 17px}
.allocation-item{width:110px;min-height:82px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;border:1px solid #d7e5ff;border-radius:12px;box-shadow:0 2px 3px #142c5008}
.allocation-item span{font-size:13px;font-weight:550}
.allocation-item strong{font-size:25px;color:#2864f5}
.right{display:flex;flex-direction:column;gap:16px}
.queue-panel{padding:24px}
.queue-head{display:flex;justify-content:space-between;align-items:center;gap:10px}
.queue-head h3{font-size:16px}
.queue-all{color:#155bff;text-decoration:none;font-size:12px;white-space:nowrap}
.queue-sub{margin-top:3px;margin-bottom:17px;color:#8a9bb6;font-size:11px}
.queue-list{display:flex;flex-direction:column;gap:10px}
.queue-item{display:flex;align-items:center;gap:12px;min-height:54px;padding:9px 10px;border:1px solid #edf1f7;border-radius:13px}
.avatar{display:flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:#dceaff;color:#1658db;font-weight:650;font-size:12px;flex-shrink:0}
.avatar.purple{background:#f2e4ff;color:#8b1ee9}
.avatar.yellow{background:#fff0c2;color:#b96900}
.avatar.green{background:#d5f9e9;color:#00895b}
.person{flex:1;min-width:0}
.person strong{display:block;margin-bottom:3px;font-size:12px;font-weight:650}
.person small{display:block;color:#91a0b8;font-size:10px}
.review{padding:7px 12px;border:0;border-radius:20px;background:#eff5ff;color:#155bff;font:inherit;font-size:11px;white-space:nowrap}
.queue-foot{display:flex;align-items:center;gap:7px;margin-top:16px;padding-top:14px;border-top:1px solid #edf1f7;color:#71809a;font-size:11px}
.queue-foot span{color:#2864ff}
.simulation{position:relative;overflow:hidden;min-height:234px;padding:25px 24px;border-radius:17px;background:#0755d8;color:#fff;box-shadow:0 3px 5px #102b5020}
.simulation:after{content:"?";position:absolute;right:-7px;bottom:-34px;width:80px;height:108px;border:10px solid #ffffff16;border-radius:14px 14px 0 0;color:#ffffff13;font-size:90px;font-weight:800;text-align:center;pointer-events:none}
.simulation h3{max-width:320px;margin-bottom:10px;font-size:20px;line-height:1.4;letter-spacing:-.4px}
.simulation p{max-width:360px;margin-bottom:15px;color:#e2ecff;font-size:13px;line-height:1.6}
.sim-button{display:inline-flex;align-items:center;gap:8px;padding:9px 16px;border:0;border-radius:9px;background:#fff;color:#0848a7;text-decoration:none;font:inherit;font-size:12px;font-weight:650}
.sim-button svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2}
@media(min-width:1500px){.content{padding-right:40px;padding-left:32px}}
@media(max-width:1200px){.sidebar{width:250px}.content{padding:22px}.topbar{padding:0 24px}.stats{gap:12px}.stat{padding:15px}.lower{gap:16px}.panel{padding:18px}.unit-foot{white-space:normal}}
@media(max-width:900px){.layout{display:block}.sidebar{width:100%;min-height:auto}.brand{margin-bottom:15px}.menu{display:grid;grid-template-columns:repeat(2,minmax(0,1fr))}.bottom{margin-top:10px;padding-top:0}.topbar h1{font-size:21px}.lower{grid-template-columns:1fr}}
@media(max-width:600px){.content{padding:16px}.topbar{height:auto;min-height:65px;padding:15px}.topbar h1{font-size:18px}.welcome{align-items:flex-start;flex-direction:column}.welcome h2{font-size:21px}.actions{flex-wrap:wrap}.stats{grid-template-columns:repeat(2,minmax(0,1fr))}.stat{padding:13px}.stat-value{font-size:23px}.units{grid-template-columns:1fr}.allocation-grid{padding:0;gap:10px}.allocation-item{width:calc(50% - 5px)}.panel-heading{align-items:flex-start}.sync{font-size:10px}.queue-panel{padding:16px}}
</style>
</head>
<body>
<div class="layout">
    <aside class="sidebar">
        <div class="brand">
            <img src="{{ asset('images/logo-dindik-jatim.svg') }}" alt="Logo Dindik Jatim">
            <div>
                <h2>Dindik Jatim</h2>
                <p>Kantor Pusat/<br>Sekretariat</p>
            </div>
        </div>

        <nav class="menu">
            <a href="{{ route('dashboard.admin') }}" class="active">
                <span class="mi"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></span>Dashboard
            </a>
            <a href="#verifikasi">
                <span class="mi"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="1"/><path d="m7 10 2 2 4-4M7 16h10"/></svg></span>Verifikasi Berkas
            </a>
            <a href="#wawancara">
                <span class="mi"><svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M9.5 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM17 11a4 4 0 0 0 0-8M21 21v-2a4 4 0 0 0-3-3.87"/></svg></span>Seleksi Wawancara
            </a>
            <a href="#dokumen">
                <span class="mi"><svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="17" rx="2"/><path d="M9 4V2h6v2M8 10h8M8 14h8M8 18h5"/></svg></span>Penerbitan Dokumen
            </a>
            <a href="#riwayat">
                <span class="mi"><svg viewBox="0 0 24 24"><path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><path d="M3 3v5h5M12 7v5l3 2"/></svg></span>Riwayat
            </a>
        </nav>

        <nav class="menu bottom">
            <a href="#bantuan">
                <span class="mi"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9.5 9a2.5 2.5 0 1 1 4.4 1.6c-1.2 1-1.9 1.5-1.9 3.4M12 17h.01"/></svg></span>Bantuan
            </a>
            <a href="{{ route('login') }}">
                <span class="mi"><svg viewBox="0 0 24 24"><path d="M10 17l5-5-5-5M15 12H3M13 4h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"/></svg></span>Keluar
            </a>
        </nav>
    </aside>

    <main class="main">
        <header class="topbar">
            <h1>Dinas Pendidikan Provinsi Jawa Timur</h1>
        </header>

        <div class="content">
            <section class="welcome">
                <div>
                    <div class="status"><span class="dot"></span>Sistem Aktif • Periode Magang 2025</div>
                    <h2>Selamat Pagi, Tim Sekretariat! 👋</h2>
                    <p>Ringkasan data &amp; simulasi pendaftar magang Dindik Jatim hari ini.</p>
                </div>
                <div class="actions">
                    <button class="btn" type="button">
                        <svg viewBox="0 0 24 24"><path d="M12 3v12m-5-5 5 5 5-5M4 17v3h16v-3"/></svg>Ekspor Rekap
                    </button>
                    <a href="#verifikasi" class="btn primary">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="m7 10 2 2 4-4M7 16h10"/></svg>Mulai Verifikasi (342)
                    </a>
                </div>
            </section>

            {{-- FILTER GLOBAL --}}
            <section class="global-filter">

                <div class="filter-heading">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 6h16M7 12h10M10 18h4"/>
                        <path d="M8 4v4M16 10v4M12 16v4"/>
                    </svg>
                    Filter Global:
                </div>

                <div class="filter-divider"></div>

                <div class="filter-group">
                    <label for="filterPeriode">Periode TA:</label>
                    <select id="filterPeriode">
                        <option value="2024/2025-genap">TA 2024/2025 Genap</option>
                        <option value="2025/2026-ganjil">TA 2025/2026 Ganjil</option>
                        <option value="2025/2026-genap">TA 2025/2026 Genap</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="filterUnit">Unit Tujuan:</label>
                    <select id="filterUnit">
                        <option value="semua">Semua Unit / Konsolidasi</option>
                        <option value="1">Kantor Pusat</option>
                        <option value="2">UPT TIKP</option>
                        <option value="3">UPT PTKK</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="filterJenjang">Jenjang:</label>
                    <select id="filterJenjang">
                        <option value="semua">Semua Jenjang</option>
                        <option value="perguruan-tinggi">Perguruan Tinggi</option>
                        <option value="smk">SMK</option>
                    </select>
                </div>

                <button type="button" class="filter-reset"
                    onclick="document.getElementById('filterPeriode').selectedIndex=0; document.getElementById('filterUnit').selectedIndex=0; document.getElementById('filterJenjang').selectedIndex=0;">
                    ↻ Reset Filter
                </button>

                <div class="filter-status">
                    <span class="dot"></span>
                    Data Terkini (Real-time)
                </div>

            </section>    

            <section class="stats">
                {{-- 1. Total Berkas Masuk --}}
                <article class="stat">
                    <div class="stat-top">
                        <p class="stat-label">Total Berkas Masuk</p>
                        <span class="stat-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 6h7l2 2h9l-3 11H3zM3 6V4h8l2 2"/>
                            </svg>
                        </span>
                    </div>
                    <p class="stat-value">
                        {{ number_format($totalPengajuan, 0, ',', '.') }}
                    </p>
                    <p class="stat-foot">Seluruh pengajuan masuk</p>
                </article>

                {{-- 2. Antrean Verifikasi --}}
                <article class="stat urgent">
                    <div class="stat-top">
                        <p class="stat-label">Antrean Verifikasi</p>
                        <span class="stat-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M18 9a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/>
                            </svg>
                        </span>
                    </div>
                    <p class="stat-value">
                        {{ number_format($perluVerifikasi, 0, ',', '.') }}
                    </p>
                    <p class="stat-foot">Menunggu pemeriksaan</p>
                </article>

                {{-- 3. Peserta Diterima Dinas Pusat --}}
                <article class="stat success">
                    <div class="stat-top">
                        <p class="stat-label">Peserta Diterima</p>
                        <span class="stat-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2 15 5l4-.5.5 4L22 12l-2.5 3.5-.5 4-4-.5L12 22l-3-3-4 .5-.5-4L2 12l2.5-3.5L5 4.5 9 5z"/>
                                <path d="m8 12 3 3 5-6"/>
                            </svg>
                        </span>
                    </div>
                    <p class="stat-value">
                        {{ number_format($pesertaDiterima, 0, ',', '.') }}
                    </p>
                    <p class="stat-foot">Diterima di Dinas Pusat</p>
                </article>

                {{-- 4. Ditolak / Gugur Dinas Pusat --}}
                <article class="stat urgent">
                    <div class="stat-top">
                        <p class="stat-label">Ditolak / Gugur</p>
                        <span class="stat-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="m9 9 6 6m0-6-6 6"/>
                            </svg>
                        </span>
                    </div>
                    <p class="stat-value">
                        {{ number_format($ditolakGugur, 0, ',', '.') }}
                    </p>
                    <p class="stat-foot">Hasil seleksi Dinas Pusat</p>
                </article>

                {{-- 5. Daya Tampung Global --}}
                <article class="stat">
                    <div class="stat-top">
                        <p class="stat-label">Daya Tampung Global</p>
                        <span class="stat-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 2v20M2 12h20"/>
                            </svg>
                        </span>
                    </div>
                    <p class="stat-value">
                        {{ number_format($totalDiterimaGlobal, 0, ',', '.') }}
                        <span style="font-size: 13px; font-weight: 500;">Peserta</span>
                    </p>
                    <p class="stat-foot">Total diterima seluruh unit</p>
                </article>
            </section>


            <section class="lower">
                <article class="panel">
                    <div class="panel-heading">
                        <h3><svg viewBox="0 0 24 24"><circle cx="12" cy="5" r="2"/><circle cx="5" cy="12" r="2"/><circle cx="19" cy="12" r="2"/><circle cx="12" cy="19" r="2"/><path d="m10.5 6.5-4 4M13.5 6.5l4 4M7 13.5l4 4M17 13.5l-4 4M7 12h10"/></svg>Distribusi Berkas Satuan Kerja</h3>
                        <span class="sync"><span class="dot"></span>Auto-Sync</span>
                    </div>
                    <p class="panel-sub">Alokasi pendaftar otomatis sesuai tujuan instansi</p>

                    <div class="units">
                        <div class="unit">
                            <div class="unit-top"><h4>Kantor Pusat</h4><span class="pill">Pusat</span></div>
                            <div class="unit-number">          
                                <strong>{{ number_format($pengajuanPusat, 0, ',', '.') }}</strong>
                                <span>{{ number_format($lolosPusat, 0, ',', '.') }} Lolos</span>
                            </div>
                            <div class="bar"><span style="width:43%"></span></div>
                            <p class="unit-foot">Wawancara Internal &nbsp;<strong>{{ number_format($wawancaraPusat, 0, ',', '.') }} Peserta</strong></p>
                        </div>
                        <div class="unit tik">
                            <div class="unit-top"><h4>UPT TIKP</h4><span class="pill">TI &amp; Media</span></div>
                            <div class="unit-number">
                                <strong>{{ number_format($pengajuanUptTikp, 0, ',', '.') }}</strong>
                                <span>{{ number_format($lolosUptTikp, 0, ',', '.') }} Lolos</span>
                            </div>
                            <div class="bar"><span style="width:43%"></span></div>
                            <p class="unit-foot">Forward ke Satker <strong>100% Selesai</strong></p>
                        </div>
                        <div class="unit ptkk">
                            <div class="unit-top"><h4>UPT PTKK</h4><span class="pill">Vokasi</span></div>
                            <div class="unit-number">
                                <strong>{{ number_format($pengajuanUptPtkk, 0, ',', '.') }}</strong>
                                <span>{{ number_format($lolosUptPtkk, 0, ',', '.') }} Lolos</span>
                            </div>
                            <div class="bar"><span style="width:43%"></span></div>
                            <p class="unit-foot">Forward ke Satker <strong>100% Selesai</strong></p>
                        </div>
                    </div>

                    <div class="allocation">
                        <div class="allocation-title">
                            <h4><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17"/><path d="M7 8h2M7 12h2M7 16h2M12 8h2M12 12h2M12 16h2M17 8h1M17 12h1M17 16h1"/></svg>Rincian Alokasi Sub-Bidang Kantor Pusat:</h4>
                            <span class="total-pill">Total 520 Berkas</span>
                        </div>
                        <div class="allocation-grid">
                            <div class="allocation-item"><span>Sekretariat</span><strong>112</strong></div>
                            <div class="allocation-item"><span>Bidang SMA</span><strong>94</strong></div>
                            <div class="allocation-item"><span>Bidang SMK</span><strong>156</strong></div>
                            <div class="allocation-item"><span>Bid. PK-PLK</span><strong>68</strong></div>
                            <div class="allocation-item"><span>Bidang GTK</span><strong>90</strong></div>
                        </div>
                    </div>
                </article>

                <div class="right">
                    <article class="panel queue-panel" id="verifikasi">
                        <div class="queue-head">
                            <h3>Antrean Cepat</h3>
                            <a href="#verifikasi" class="queue-all">Semua (342) →</a>
                        </div>
                        <p class="queue-sub">Validasi berkas prioritas masuk</p>

                        <div class="queue-list">
                            <div class="queue-item">
                                <span class="avatar">BS</span>
                                <div class="person"><strong>Budi Santoso</strong><small>UPT TIKP • SMK</small></div>
                                <button class="review" type="button">Periksa</button>
                            </div>
                            <div class="queue-item">
                                <span class="avatar purple">SA</span>
                                <div class="person"><strong>Siti Aminah</strong><small>Pusat • Sekretariat</small></div>
                                <button class="review" type="button">Periksa</button>
                            </div>
                            <div class="queue-item">
                                <span class="avatar yellow">DP</span>
                                <div class="person"><strong>Dina Permata</strong><small>UPT PTKK • Vokasi</small></div>
                                <button class="review" type="button">Periksa</button>
                            </div>
                            <div class="queue-item">
                                <span class="avatar green">AF</span>
                                <div class="person"><strong>Ahmad Fauzi</strong><small>Pusat • Bid. SMK</small></div>
                                <button class="review" type="button">Periksa</button>
                            </div>
                        </div>

                        <div class="queue-foot"><span>ϟ</span> Auto-route aktif ke satker tujuan</div>
                    </article>

                    <article class="simulation">
                        <h3>Lakukan Simulasi Penerimaan Magang</h3>
                        <p>Simulasikan perubahan kondisi penerimaan kuota magang untuk melihat potensi dampaknya.</p>
                        <a href="#simulasi" class="sim-button">Simulasikan sekarang <svg viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                    </article>
                </div>
            </section>

            <div id="riwayat"></div>
            <div id="simulasi"></div>
            <div id="bantuan"></div>
        </div>
    </main>
</div>
</body>
</html>
