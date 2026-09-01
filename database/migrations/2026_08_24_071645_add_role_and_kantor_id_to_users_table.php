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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['pendaftar', 'admin', 'kepala'])
                ->default('pendaftar');

            $table->foreignId('kantor_id')
                ->nullable()
                ->constrained('kantors')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['kantor_id']);
            $table->dropColumn(['role', 'kantor_id']);
        });
    }
};
