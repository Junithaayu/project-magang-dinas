<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pewawancara extends Model
{
    /**
     * Get the kantor that owns this interviewer.
     */
    public function kantor(): BelongsTo
    {
        return $this->belongsTo(Kantor::class);
    }

    /**
     * Get the interviews conducted by this interviewer.
     */
    public function wawancaras(): HasMany
    {
        return $this->hasMany(Wawancara::class);
    }
}