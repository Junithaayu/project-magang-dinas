<?php

namespace Database\Seeders;

use App\Models\Kantor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $kantorPusat = Kantor::where('nama', 'Kantor Pusat')->firstOrFail();
        $kantorCabang1 = Kantor::where('nama', 'Kantor Cabang 1')->firstOrFail();

        User::updateOrCreate(
            ['email' => 'admin@test.local'],
            [
                'name' => 'Admin Testing',
                'password' => Hash::make('password'),
                'role' => 'admin_pusat',
                'kantor_id' => $kantorPusat->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin.upt.tik@test.local'],
            [
                'name' => 'Admin UPT TIK Testing',
                'password' => Hash::make('password'),
                'role' => 'admin_upt_tik',
                'kantor_id' => $kantorCabang1->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'kepala@test.local'],
            [
                'name' => 'Kepala Testing',
                'password' => Hash::make('password'),
                'role' => 'kepala',
                'kantor_id' => $kantorPusat->id,
            ]
        );

        User::updateOrCreate(
            ['email' => 'pendaftar@test.local'],
            [
                'name' => 'Pendaftar Testing',
                'password' => Hash::make('password'),
                'role' => 'pendaftar',
                'kantor_id' => null,
            ]
        );
    }
}
