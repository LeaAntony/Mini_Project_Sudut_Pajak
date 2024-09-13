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
        Schema::create('bidang_usaha', function (Blueprint $table) {
            $table->id('id_bidang_usaha');
            $table->string('judul_bidang_usaha');
            $table->longText('deskripsi_bidang_usaha');
            $table->string('gambar_bidang_usaha');
            $table->enum('status_bidang_usaha', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_usaha');
    }
};
