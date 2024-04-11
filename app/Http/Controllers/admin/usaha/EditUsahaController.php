<?php

namespace App\Http\Controllers\admin\usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/usaha/edit_usaha');
    }
}
