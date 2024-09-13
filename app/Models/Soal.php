<?php

namespace App\Models;

use Database\Factories\SoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Soal extends Model
{
    use HasFactory;
    protected $table = "soal";
    protected $guarded = ['id_soal'];
    protected $primaryKey = 'id_soal';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new SoalFactory();
    }

    // Many to One to category table
    public function kuis(): BelongsTo
    {
        return $this->belongsTo(Kuis::class, 'id_kuis');
    }
}
