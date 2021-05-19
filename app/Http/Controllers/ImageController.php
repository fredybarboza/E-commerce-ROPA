<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        $imagenes = $request->file('file')->store('public');

        $url = Storage::url($imagenes);

        $file = new File;
        $file->url = $url;
        $file->save();
        

    }
}
