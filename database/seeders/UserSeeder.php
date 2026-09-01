<?php

namespace Database\Seeders;

use App\Models\Kantor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kantorPusat = Kantor::where('nama', 'Kantor Pusat')->firstOrFail();

        User::create([
            'name' => 'Admin Testing',
            'email' => 'admin@test.local',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'kantor_id' => $kantorPusat->id,
        ]);

        User::create([
            'name' => 'Kepala Testing',
            'email' => 'kepala@test.local',
            'password' => Hash::make('password'),
            'role' => 'kepala',
            'kantor_id' => $kantorPusat->id,
        ]);

        User::create([
            'name' => 'Pendaftar Testing',
            'email' => 'pendaftar@test.local',
            'password' => Hash::make('password'),
            'role' => 'pendaftar',
            'kantor_id' => null,
        ]);
    }
}