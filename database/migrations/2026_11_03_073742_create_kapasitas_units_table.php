<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kapasitas_units', function (Blueprint $table) {
            $table->id('id_kapasitas');

            $table->foreignId('unit_tujuan')
                ->constrained('units')
                ->cascadeOnDelete();

            $table->foreignId('sub_unit')
                ->nullable()
                ->constrained('bidangs')
                ->nullOnDelete();

            $table->unsignedInteger('kapasitas_peserta_aktif');

            $table->date('berlaku_mulai');
            $table->date('berlaku_sampai')->nullable();

            $table->foreignId('id_petugas_input')
                ->constrained('users')
                ->restrictOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kapasitas_units');
    }
};
