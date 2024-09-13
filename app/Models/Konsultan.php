<?php

namespace App\Models;

use Database\Factories\KonsultanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
    use HasFactory;
    protected $table = "konsultan";
    protected $guarded = ['id_konsultan'];
    protected $primaryKey = 'id_konsultan';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new KonsultanFactory;
    }
}
