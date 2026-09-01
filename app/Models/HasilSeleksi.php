<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilSeleksi extends Model
{
    /**
     * Get the application.
     */
    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(PengajuanMagang::class, 'pengajuan_id');
    }

    /**
     * Get the head who made the final decision.
     */
    public function kepala(): BelongsTo
    {
        return $this->belongsTo(User::class, 'kepala_id');
    }
}