<?php

namespace App\Http\Controllers\admin\usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/usaha/list_usaha');
    }
}
