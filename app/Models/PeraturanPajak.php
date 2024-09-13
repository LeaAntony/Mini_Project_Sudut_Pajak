<?php

namespace App\Models;

use Database\Factories\PeraturanPajakFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeraturanPajak extends Model
{
    use HasFactory;
    protected $table = 'peraturan_pajak';
    protected $guarded = ['id_peraturan_pajak'];
    protected $primaryKey = 'id_peraturan_pajak';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new PeraturanPajakFactory();
    }
}
