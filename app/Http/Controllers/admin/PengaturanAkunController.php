<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaturanAkunController extends Controller
{
    public function tampilkan()
    {
        $user = Auth::user();
        return view('admin.pengaturan_akun', compact('user'));
    }
}
