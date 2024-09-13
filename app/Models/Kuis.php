<?php

namespace App\Models;

use Database\Factories\KuisFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kuis extends Model
{
    use HasFactory;
    protected $table = "kuis";
    protected $guarded = ['id_kuis'];
    protected $primaryKey = 'id_kuis';

    // Seeder dan Factory
    protected static function newFactory()
    {
        return new KuisFactory;
    }

    // One to Many ke tabel soal
    public function soals(): HasMany
    {
        return $this->HasMany(Soal::class, 'id_kuis');
    }
}
