<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kantor extends Model
{
    /**
     * Get the users belonging to this kantor.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the units belonging to this kantor.
     */
    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}