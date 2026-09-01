<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitPusat = Unit::where('nama', 'Dinas Pendidikan Pusat')->firstOrFail();

        Bidang::create([
            'unit_id' => $unitPusat->id,
            'nama' => 'Sekretariat',
        ]);

        Bidang::create([
            'unit_id' => $unitPusat->id,
            'nama' => 'SMA',
        ]);

        Bidang::create([
            'unit_id' => $unitPusat->id,
            'nama' => 'SMK',
        ]);

        Bidang::create([
            'unit_id' => $unitPusat->id,
            'nama' => 'PK-PLK',
        ]);

        Bidang::create([
            'unit_id' => $unitPusat->id,
            'nama' => 'GTK',
        ]);
    }
}