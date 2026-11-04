
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tambahkan role baru tanpa menghapus role lama.
        DB::statement("
            ALTER TABLE users
            MODIFY COLUMN role
            ENUM('pendaftar', 'admin', 'admin_pusat', 'admin_upt_tik', 'kepala')
            NOT NULL DEFAULT 'pendaftar'
        ");

        // 2. Ubah admin lama menjadi admin pusat.
        DB::table('users')
            ->where('role', 'admin')
            ->update(['role' => 'admin_pusat']);

        // 3. Hapus role admin lama setelah tidak digunakan lagi.
        DB::statement("
            ALTER TABLE users
            MODIFY COLUMN role
            ENUM('pendaftar', 'admin_pusat', 'admin_upt_tik', 'kepala')
            NOT NULL DEFAULT 'pendaftar'
        ");
    }

    public function down(): void
    {
        // 1. Izinkan role lama dan baru untuk sementara.
        DB::statement("
            ALTER TABLE users
            MODIFY COLUMN role
            ENUM('pendaftar', 'admin', 'admin_pusat', 'admin_upt_tik', 'kepala')
            NOT NULL DEFAULT 'pendaftar'
        ");

        // 2. Kembalikan kedua role admin ke role lama.
        DB::table('users')
            ->whereIn('role', ['admin_pusat', 'admin_upt_tik'])
            ->update(['role' => 'admin']);

        // 3. Kembalikan definisi role sebelumnya.
        DB::statement("
            ALTER TABLE users
            MODIFY COLUMN role
            ENUM('pendaftar', 'admin', 'kepala')
            NOT NULL DEFAULT 'pendaftar'
        ");
    }
};
