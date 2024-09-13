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
        Schema::create('soal', function (Blueprint $table) {
            $table->id('id_soal');
            $table->string('pertanyaan_soal');
            $table->integer('skor_soal');
            $table->enum('tipe_soal', ['Pilihan Ganda', 'Esai']);
            $table->string('opsi_a_soal')->nullable();
            $table->string('opsi_b_soal')->nullable();
            $table->string('opsi_c_soal')->nullable();
            $table->string('opsi_d_soal')->nullable();
            $table->string('opsi_e_soal')->nullable();
            $table->string('jawaban_soal')->nullable();
            $table->unsignedBigInteger("id_kuis");
            $table->timestamps();

            $table->foreign("id_kuis")->references("id_kuis")->on("kuis")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};
