<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wawancara extends Model
{
    /**
     * Get the application being interviewed.
     */
    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(PengajuanMagang::class, 'pengajuan_id');
    }

    /**
     * Get the admin who scheduled this interview.
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    /**
     * Get the interviewer.
     */
    public function pewawancara(): BelongsTo
    {
        return $this->belongsTo(Pewawancara::class, 'pewawancara_id');
    }
}