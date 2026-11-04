<?php

namespace App\Models;

use App\Models\KapasitasUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    /**
     * Get the kantor that owns this unit.
     */
    public function kantor(): BelongsTo
    {
        return $this->belongsTo(Kantor::class);
    }

    /**
     * Get the bidangs belonging to this unit.
     */
    public function bidangs(): HasMany
    {
        return $this->hasMany(Bidang::class);
    }
    
    public function kapasitasUnits(): HasMany
    {
        return $this->hasMany(
            KapasitasUnit::class,
            'unit_tujuan'
        );
    }
}