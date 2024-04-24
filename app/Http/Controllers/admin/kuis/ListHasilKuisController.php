<?php

namespace App\Http\Controllers\admin\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListHasilKuisController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/list_hasil_kuis');
    }
}
