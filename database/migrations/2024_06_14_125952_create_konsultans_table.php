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
        Schema::create('konsultan', function (Blueprint $table) {
            $table->id('id_konsultan');
            $table->string('nama_konsultan');
            $table->string('email_konsultan');
            $table->bigInteger('nomor_konsultan');
            $table->longText('bio_konsultan');
            $table->string('foto_profil_konsultan');
            $table->string('alumnus_konsultan');
            $table->string('jenjang_karir_konsultan');
            $table->enum('kategori_konsultan', ['PPh Badan', 'PPh Tahunan Orang Pribadi', 'PPh Pasal 21', 'PPh Pasal 22 & 23', 'PPh Pasal 25']);
            $table->enum('status_konsultan', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultan');
    }
};
