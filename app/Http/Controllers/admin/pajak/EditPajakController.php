<?php

namespace App\Http\Controllers\admin\pajak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditPajakController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pajak/edit_pajak');
    }
}
