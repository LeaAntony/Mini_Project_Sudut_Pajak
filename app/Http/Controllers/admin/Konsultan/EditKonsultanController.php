<?php

namespace App\Http\Controllers\admin\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditKonsultanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/konsultan/edit_konsultan');
    }
}
