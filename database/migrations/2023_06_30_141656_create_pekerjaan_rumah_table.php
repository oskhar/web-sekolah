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
        Schema::create('home_works', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->text('deskripsi');
            $table->date('tanggal_dikumpulkan');
            $table->integer('gedung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_works');
    }
};