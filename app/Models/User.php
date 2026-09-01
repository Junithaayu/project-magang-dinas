<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'kantor_id'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the user's kantor.
     */
    public function kantor(): BelongsTo
    {
        return $this->belongsTo(Kantor::class);
    }

    /**
     * Get the user's profile.
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get the user's internship applications.
     */
    public function pengajuanMagang(): HasMany
    {
        return $this->hasMany(PengajuanMagang::class);
    }

    /**
     * Get the documents verified by this user.
     */
    public function dokumenDiverifikasi(): HasMany
    {
        return $this->hasMany(DokumenPengajuan::class, 'verified_by');
    }

    /**
     * Get the interviews scheduled by this user.
     */
    public function wawancaraDijadwalkan(): HasMany
    {
        return $this->hasMany(Wawancara::class, 'admin_id');
    }

    /**
     * Get the final selections decided by this user.
     */
    public function hasilSeleksi(): HasMany
    {
        return $this->hasMany(HasilSeleksi::class, 'kepala_id');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}