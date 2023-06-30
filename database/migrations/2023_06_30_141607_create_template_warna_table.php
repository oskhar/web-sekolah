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
        Schema::create('template_warna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('w1');
            $table->string('w2');
            $table->string('w3');
            $table->string('w4');
            $table->string('w5');
            $table->string('darktable');
            $table->string('selected');
            $table->string('shadow');
            $table->string('danger');
            $table->string('warning');
            $table->string('sucess');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_warna');
    }
};
