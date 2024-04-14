<?php

namespace App\Http\Controllers\pembelajaran\infografis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran/infografis/infografis');
    }
}
