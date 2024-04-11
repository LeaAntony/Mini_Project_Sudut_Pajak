<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeraturanPajakController extends Controller
{
    public function tampilkanPusat()
    {
        return view('peraturan/peraturan_pajak_pusat');
    }

    public function tampilkanDaerah()
    {
        return view('peraturan/peraturan_pajak_daerah');
    }
}
