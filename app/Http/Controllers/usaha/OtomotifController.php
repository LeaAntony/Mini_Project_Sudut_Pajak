<?php

namespace App\Http\Controllers\usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtomotifController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/otomotif');
    }
}
