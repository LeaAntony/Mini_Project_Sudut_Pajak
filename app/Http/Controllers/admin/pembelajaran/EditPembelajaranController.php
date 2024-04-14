<?php

namespace App\Http\Controllers\admin\pembelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditPembelajaranController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pembelajaran/edit_pembelajaran');
    }
}
