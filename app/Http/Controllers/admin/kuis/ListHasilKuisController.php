<?php

namespace App\Http\Controllers\admin\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListHasilKuisController extends Controller
{
    public function tampilkan()
    {
        $user = Auth::user();
        return view('admin.kuis.list_hasil_kuis', compact('user'));
    }
}
