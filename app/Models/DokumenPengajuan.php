<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DokumenPengajuan extends Model
{
    /**
     * Get the application that owns this document.
     */
    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(PengajuanMagang::class, 'pengajuan_id');
    }

    /**
     * Get the user who verified this document.
     */
    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}