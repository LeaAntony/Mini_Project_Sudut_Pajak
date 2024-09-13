<?php

namespace App\Models;

use Database\Factories\PembelajaranFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;
    protected $table = 'pembelajaran';
    protected $guarded = ['id_pembelajaran'];
    protected $primaryKey = 'id_pembelajaran';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PembelajaranFactory();
    }
}
