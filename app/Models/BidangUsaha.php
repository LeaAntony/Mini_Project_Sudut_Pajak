<?php

namespace App\Models;

use Database\Factories\BidangUsahaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUsaha extends Model
{
    use HasFactory;
    protected $table = 'bidang_usaha';
    protected $guarded = ['id_bidang_usaha'];
    protected $primaryKey = 'id_bidang_usaha';

    // Seeder and Factory
    protected static function newFactory()
    {
        return new BidangUsahaFactory();
    }
}
