<?php

namespace App\Http\Controllers\bidang_usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function tampilkan()
    {
        return view('bidang_usaha/fashion');
    }
}
