<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function save(Request $request)
    {
       $media = new Media();
       $files = $request->file('media');
       $extension = $files->getClientOriginalExtension();
       $filename = time().'.'.$extension;
       $files->move('Media/',$filename);
       $media->media = $filename;
       $media->activite_id = $request->activite_id;
       $media->save();

       return back();

    }
}
