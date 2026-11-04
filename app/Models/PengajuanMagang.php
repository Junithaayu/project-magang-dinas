<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PengajuanMagang extends Model
{
    protected $table = 'pengajuan_magang';

    protected $fillable = [
        'user_id',
        'unit_id',
        'bidang_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'nama_lengkap',
        'nik',
        'no_telepon',
        'jenjang_pendidikan',
        'nama_instansi',
        'jurusan',
        'nomor_induk',
        'nilai',
        'alamat_lengkap',
        'butuh_surat_balasan',
        'deskripsi_proposal',
        'topik',
        'hasil_diharapkan',
        'konversi_mata_kuliah',
        'pernyataan_benar',
        'status_pengajuan',
        'status_verifikasi',
    ];
    /**
     * Get the user who owns this application.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the unit selected for this application.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * Get the bidang selected for this application.
     */
    public function bidang(): BelongsTo
    {
        return $this->belongsTo(Bidang::class);
    }

    /**
     * Get the documents attached to this application.
     */
    public function dokumen(): HasMany
    {
        return $this->hasMany(DokumenPengajuan::class, 'pengajuan_id');
    }

    /**
     * Get the interview for this application.
     */
    public function wawancara(): HasOne
    {
        return $this->hasOne(Wawancara::class, 'pengajuan_id');
    }

    /**
     * Get the final selection for this application.
     */
    public function hasilSeleksi(): HasOne
    {
        return $this->hasOne(HasilSeleksi::class, 'pengajuan_id');
    }
}