<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File as f;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index(Request $req)
    {
       return view('frontend.downloads');
    }

    public function download($id)
    {
        $file = f::where('document_id',$id)->first();

        // $path = str_replace('public','',$file->file);

        return Storage::download($file->file);
    }
}
