<?php

namespace App\Http\Controllers\usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KosmetikController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/kosmetik');
    }
}
