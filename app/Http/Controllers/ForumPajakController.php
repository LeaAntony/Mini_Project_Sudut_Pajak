<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumPajakController extends Controller
{
    public function tampilkan()
    {
        return view('forum_pajak');
    }
}
