<?php

namespace App\Models;

use Database\Factories\BeritaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $guarded = ['id_berita'];
    protected $primaryKey = 'id_berita';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new BeritaFactory();
    }
}
