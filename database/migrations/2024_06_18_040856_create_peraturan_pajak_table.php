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
        Schema::create('peraturan_pajak', function (Blueprint $table) {
            $table->id('id_peraturan_pajak');
            $table->string('judul_peraturan_pajak');
            $table->longText('deskripsi_peraturan_pajak');
            $table->string('file_peraturan_pajak');
            $table->enum('kategori_peraturan_pajak', ['Pusat', 'Daerah']);
            $table->enum('status_peraturan_pajak', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan_pajak');
    }
};
