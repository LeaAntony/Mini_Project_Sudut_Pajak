<?php

namespace App\Http\Controllers\konsultasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function tampilkan()
    {
        return view('konsultasi/chat');
    }
}
