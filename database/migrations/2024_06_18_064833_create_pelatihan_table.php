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
        Schema::create('pelatihan', function (Blueprint $table) {
            $table->id('id_pelatihan');
            $table->string('judul_pelatihan');
            $table->longText('deskripsi_pelatihan');
            $table->string('gambar_pelatihan');
            $table->string('pdf_pelatihan');
            $table->string('ppt_pelatihan');
            $table->string('link_pelatihan');
            $table->enum('status_pelatihan', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihan');
    }
};
