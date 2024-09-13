<?php

namespace App\Http\Controllers\pembelajaran\video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailVideoController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran.video.detail_video');
    }
}
