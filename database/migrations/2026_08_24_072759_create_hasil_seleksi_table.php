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
        Schema::create('hasil_seleksi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pengajuan_id')
                ->unique()
                ->constrained('pengajuan_magang')
                ->cascadeOnDelete();

            $table->foreignId('kepala_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->enum('status', [
                'diterima',
                'ditolak',
            ]);

            $table->date('tanggal_keputusan');

            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->string('file_surat')->nullable();

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_seleksi');
    }
};
