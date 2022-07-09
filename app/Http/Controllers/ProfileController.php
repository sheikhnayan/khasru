<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('frontend.profile');
    }

    public function upload()
    {
        return view('frontend.upload');
    }
}
