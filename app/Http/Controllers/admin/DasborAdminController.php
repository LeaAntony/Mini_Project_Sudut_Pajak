<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasborAdminController extends Controller
{
    public function tampilkan()
    {
        return view('admin/Dasbor');
    }
}
