<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('password');
            $table->string('foto_profile')->nullable();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir')->nullable();
            $table->integer('gedung')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_telepon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};