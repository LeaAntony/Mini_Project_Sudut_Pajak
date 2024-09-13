<?php

namespace App\Models;

use Database\Factories\PelatihanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $table = 'pelatihan';
    protected $guarded = ['id_pelatihan'];
    protected $primaryKey = 'id_pelatihan';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PelatihanFactory;
    }
}
