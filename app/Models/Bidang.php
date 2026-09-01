<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bidang extends Model
{
    /**
     * Get the unit that owns this bidang.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}