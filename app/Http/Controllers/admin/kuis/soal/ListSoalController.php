<?php

namespace App\Http\Controllers\admin\kuis\soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListSoalController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/soal/list_soal');
    }
}
