<?php

namespace App\Http\Controllers\admin\pelatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPelatihanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pelatihan/list_pelatihan');
    }
}
