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
        Schema::create('wawancaras', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pengajuan_id')
                ->unique()
                ->constrained('pengajuan_magang')
                ->cascadeOnDelete();

            $table->foreignId('admin_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('pewawancara_id')
                ->constrained('pewawancaras')
                ->restrictOnDelete();

            $table->date('tanggal');
            $table->time('waktu');

            $table->enum('metode', [
                'online',
                'offline',
            ]);

            $table->text('tautan_lokasi');

            $table->text('catatan')->nullable();

            $table->enum('status_kehadiran', [
                'belum_konfirmasi',
                'hadir',
                'tidak_hadir',
            ])->default('belum_konfirmasi');

            // Evaluasi wawancara: nilai 0–100
            $table->unsignedTinyInteger('kompetensi_teknis')->nullable();
            $table->unsignedTinyInteger('komunikasi')->nullable();
            $table->unsignedTinyInteger('motivasi')->nullable();

            $table->string('rekomendasi')->nullable();
            $table->text('catatan_pewawancara')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wawancaras');
    }
};
