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
        Schema::table('user', function (Blueprint $table) { // Ganti 'user' menjadi 'users'
            $table->unsignedBigInteger('fakultas_id')->nullable()->after('semester'); // Pastikan tipe data sama
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
        });
    }

    /**php
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) { // Ganti 'user' menjadi 'users'
            $table->dropForeign(['fakultas_id']); // Drop foreign key constraint terlebih dahulu
            $table->dropColumn('fakultas_id');
        });
    }
};
