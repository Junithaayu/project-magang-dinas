<?php

namespace Database\Seeders;

use App\Models\Kantor;
use Illuminate\Database\Seeder;

class KantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kantor::create([
            'nama' => 'Kantor Pusat',
            'jenis' => 'pusat',
            'alamat' => null,
        ]);

        Kantor::create([
            'nama' => 'Kantor Cabang 1',
            'jenis' => 'cabang',
            'alamat' => null,
        ]);

        Kantor::create([
            'nama' => 'Kantor Cabang 2',
            'jenis' => 'cabang',
            'alamat' => null,
        ]);
    }
}