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
        Schema::create('pembelajaran', function (Blueprint $table) {
            $table->id('id_pembelajaran');
            $table->string('judul_pembelajaran');
            $table->enum('tipe_pembelajaran', ['Artikel', 'Infografis', 'Video']);
            $table->string('gambar_pembelajaran');
            $table->longText('isi_artikel_pembelajaran')->nullable();
            $table->string('link_video_pembelajaran')->nullable();
            $table->enum('status_pembelajaran', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelajaran');
    }
};
