<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KosmetikController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/kosmetik');
    }
}
