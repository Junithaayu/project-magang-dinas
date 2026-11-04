<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\KapasitasUnit;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bidang extends Model
{
    /**
     * Get the unit that owns this bidang.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function kapasitasUnits(): HasMany
    {
        return $this->hasMany(
            KapasitasUnit::class,
            'sub_unit'
        );
    }
}