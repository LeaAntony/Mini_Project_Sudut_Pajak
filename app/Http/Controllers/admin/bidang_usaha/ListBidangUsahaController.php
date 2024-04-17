<?php

namespace App\Http\Controllers\admin\bidang_usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListBidangUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/bidang_usaha/list_bidang_usaha');
    }
}
