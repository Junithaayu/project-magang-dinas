<?php

namespace Database\Seeders;

use App\Models\Kantor;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kantorPusat = Kantor::where('nama', 'Kantor Pusat')->firstOrFail();
        $kantorCabang1 = Kantor::where('nama', 'Kantor Cabang 1')->firstOrFail();
        $kantorCabang2 = Kantor::where('nama', 'Kantor Cabang 2')->firstOrFail();

        Unit::create([
            'kantor_id' => $kantorPusat->id,
            'nama' => 'Dinas Pendidikan Pusat',
            'deskripsi' => null,
        ]);

        Unit::create([
            'kantor_id' => $kantorCabang1->id,
            'nama' => 'UPT TIKP',
            'deskripsi' => null,
        ]);

        Unit::create([
            'kantor_id' => $kantorCabang2->id,
            'nama' => 'UPT PTKK',
            'deskripsi' => null,
        ]);
    }
}