<?php

namespace App\Http\Controllers\pembelajaran\video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran.video.video');
    }
}
