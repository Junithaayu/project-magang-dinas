<?php

namespace App\Http\Controllers;

use App\Models\PengajuanMagang;

class AdminDashboardController extends Controller
{
    /**
     * Menampilkan dashboard Admin Pusat.
     */
    public function index()
    {
        $totalPengajuan = PengajuanMagang::where(
            'status_pengajuan',
            '!=',
            'draft'
        )->count();

        $perluVerifikasi = PengajuanMagang::where(
            'status_verifikasi',
            'menunggu'
        )->where(
            'status_pengajuan',
            '!=',
            'draft'
        )->count();

        $wawancaraPusat = \App\Models\Wawancara::whereHas(
            'pengajuan',
            function ($query) {
                $query->where('unit_id', 1);
            }
        )->count();

        $lolosSeleksi = \App\Models\HasilSeleksi::where(
            'status',
            'diterima'
        )->whereHas(
            'pengajuan',
            function ($query) {
                $query->where('unit_id', 1);
            }
        )->count();

        $pengajuanPusat = PengajuanMagang::where('unit_id', 1)
            ->where('status_pengajuan', '!=', 'draft')
            ->count();

        $pengajuanUptTikp = PengajuanMagang::where('unit_id', 2)
            ->where('status_pengajuan', '!=', 'draft')
            ->count();

        $pengajuanUptPtkk = PengajuanMagang::where('unit_id', 3)
            ->where('status_pengajuan', '!=', 'draft')
            ->count();

        $lolosPusat = \App\Models\HasilSeleksi::where('status', 'diterima')
            ->whereHas('pengajuan', function ($query) {
                $query->where('unit_id', 1);
            })
            ->count();

        $lolosUptTikp = \App\Models\HasilSeleksi::where('status', 'diterima')
            ->whereHas('pengajuan', function ($query) {
                $query->where('unit_id', 2);
            })
            ->count();

        $lolosUptPtkk = \App\Models\HasilSeleksi::where('status', 'diterima')
            ->whereHas('pengajuan', function ($query) {
                $query->where('unit_id', 3);
            })
            ->count();

        // Statistik Lolos Verifikasi
        $lolosVerifikasi = PengajuanMagang::where(
            'status_verifikasi',
            'lolos'
        )->where(
            'status_pengajuan',
            '!=',
            'draft'
        )->count();

        // Statistik Peserta Diterima di Dinas Pusat
        $pesertaDiterima = \App\Models\HasilSeleksi::where(
            'status',
            'diterima'
        )->whereHas('pengajuan', function ($query) {
            $query->where('unit_id', 1);
        })->count();

        // Statistik Ditolak / Gugur di Dinas Pusat
        $ditolakGugur = \App\Models\HasilSeleksi::where(
            'status',
            'ditolak'
        )->whereHas('pengajuan', function ($query) {
            $query->where('unit_id', 1);
        })->count();

        // Total Peserta Diterima Global (seluruh unit)
        $totalDiterimaGlobal = \App\Models\HasilSeleksi::where(
            'status',
            'diterima'
        )->whereHas('pengajuan', function ($query) {
            $query->whereIn('unit_id', [1, 2, 3]);
        })->count();

        return view('admin.dashboard', [
            'totalPengajuan' => $totalPengajuan,
            'perluVerifikasi' => $perluVerifikasi,
            'wawancaraPusat' => $wawancaraPusat,
            'lolosSeleksi' => $lolosSeleksi,
            'pengajuanPusat' => $pengajuanPusat,
            'pengajuanUptTikp' => $pengajuanUptTikp,
            'pengajuanUptPtkk' => $pengajuanUptPtkk,
            'lolosPusat' => $lolosPusat,
            'lolosUptTikp' => $lolosUptTikp,
            'lolosUptPtkk' => $lolosUptPtkk,
            'lolosVerifikasi' => $lolosVerifikasi,
            'pesertaDiterima' => $pesertaDiterima,
            'ditolakGugur' => $ditolakGugur,
            'totalDiterimaGlobal' => $totalDiterimaGlobal,
        ]);
    }
}
