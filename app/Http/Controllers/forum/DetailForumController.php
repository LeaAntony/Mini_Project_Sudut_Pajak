<?php

namespace App\Http\Controllers\forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailForumController extends Controller
{
    public function tampilkan()
    {
        return view('forum/detail_forum');
    }
}
