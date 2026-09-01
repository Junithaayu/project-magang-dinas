<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    /**
     * Get the regencies belonging to this province.
     */
    public function regencies(): HasMany
    {
        return $this->hasMany(Regency::class);
    }
}