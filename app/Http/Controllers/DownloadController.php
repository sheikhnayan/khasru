<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index(Request $req)
    {
        return view('frontend.downloads');
    }
}
