<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('nama_lengkap');
            $table->string('nik', 16);
            $table->string('no_telepon');

            $table->foreignId('province_id')
                ->constrained('provinces')
                ->restrictOnDelete();

            $table->foreignId('regency_id')
                ->constrained('regencies')
                ->restrictOnDelete();

            $table->foreignId('district_id')
                ->constrained('districts')
                ->restrictOnDelete();

            $table->foreignId('village_id')
                ->constrained('villages')
                ->restrictOnDelete();

            $table->text('alamat_lengkap');

            $table->enum('jenjang_pendidikan', ['SMA', 'SMK', 'MAHASISWA']);
            $table->string('nama_instansi');
            $table->string('jurusan');
            $table->string('nomor_induk');

            $table->string('foto_profil')->nullable();
            $table->decimal('nilai', 5, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
