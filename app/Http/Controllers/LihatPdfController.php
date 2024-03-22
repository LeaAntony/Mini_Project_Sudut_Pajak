<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatPdfController extends Controller
{
    public function tampilkan()
    {
        return view('lihat_pdf');
    }
}
