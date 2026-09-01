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
        Schema::create('pengajuan_magang', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('unit_id')
                ->constrained('units')
                ->restrictOnDelete();

            $table->foreignId('bidang_id')
                ->nullable()
                ->constrained('bidangs')
                ->nullOnDelete();

            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');

            // Snapshot data pendaftar saat pengajuan dikirim
            $table->string('nama_lengkap');
            $table->string('nik', 16);
            $table->string('no_telepon');
            $table->enum('jenjang_pendidikan', ['SMA', 'SMK', 'MAHASISWA']);
            $table->string('nama_instansi');
            $table->string('jurusan');
            $table->string('nomor_induk');
            $table->decimal('nilai', 5, 2);
            $table->text('alamat_lengkap');

            // Form Administrasi
            $table->boolean('butuh_surat_balasan')->default(false);
            $table->text('deskripsi_proposal');
            $table->text('topik');
            $table->json('hasil_diharapkan');
            $table->boolean('konversi_mata_kuliah')->default(false);
            $table->boolean('pernyataan_benar')->default(false);

            // Status
            $table->enum('status_pengajuan', [
                'draft',
                'submitted',
                'verifikasi',
                'wawancara',
                'seleksi',
                'diterima',
                'ditolak',
            ])->default('draft');

            $table->enum('status_verifikasi', [
                'menunggu',
                'sedang_diperiksa',
                'lolos',
                'ditolak',
            ])->default('menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_magang');
    }
};
