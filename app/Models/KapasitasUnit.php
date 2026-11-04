<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KapasitasUnit extends Model
{
    protected $primaryKey = 'id_kapasitas';

    protected $fillable = [
        'unit_tujuan',
        'sub_unit',
        'kapasitas_peserta_aktif',
        'berlaku_mulai',
        'berlaku_sampai',
        'id_petugas_input',
    ];

    protected function casts(): array
    {
        return [
            'kapasitas_peserta_aktif' => 'integer',
            'berlaku_mulai' => 'date',
            'berlaku_sampai' => 'date',
        ];
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'unit_tujuan');
    }

    public function bidang(): BelongsTo
    {
        return $this->belongsTo(Bidang::class, 'sub_unit');
    }

    public function petugasInput(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_petugas_input');
    }
}
