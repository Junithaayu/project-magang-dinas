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
        Schema::create('dokumen_pengajuan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pengajuan_id')
                ->constrained('pengajuan_magang')
                ->cascadeOnDelete();

            $table->enum('jenis_dokumen', [
                'cv',
                'surat_pengantar',
                'proposal',
            ]);

            $table->string('nama_file');
            $table->string('path_file');
            $table->unsignedBigInteger('ukuran_file')->nullable();
            $table->string('tipe_file')->nullable();

            $table->enum('status_verifikasi', [
                'menunggu',
                'lolos',
                'ditolak',
            ])->default('menunggu');

            $table->text('catatan_verifikasi')->nullable();

            $table->foreignId('verified_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('verified_at')->nullable();

            $table->timestamps();

            $table->unique(['pengajuan_id', 'jenis_dokumen']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_pengajuan');
    }
};
