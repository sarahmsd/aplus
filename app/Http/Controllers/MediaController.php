<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Elastic\Elasticsearch\Endpoints\Cat;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all()->where('ecole_id', auth()->user()->id);
        return view('Ecole.Dashbord.medias.index', compact('medias'));
    }

    public function create()
    {
        return view('Ecole.Dashbord.medias.create');
    }

    public function mediaAcitvity($id, $idactivity)
    {
        $medias = Media::where([
            ['ecole_id', $id],
            ['activity', $idactivity]
        ]);

        return back(compact('medias'));
    }


    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'media' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:700'
        ]);

        DB::beginTransaction();

        try {

            $request->file('media')->store('public/images');
            $name = $request->file('media')->hashName();

            $media = new Media();
            $media->media = $name;
            $media->ecole_id = auth()->user()->id;
            if ($request->activite_id) {
                $media->activite_id = $request->activite_id;
            }
            $success = $media->save();

            DB::commit();

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            $success = false;
        }

        if ($success) {
            session()->flash('success', 'Image create successfully');
        }

        return back();
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $media = Media::find($id);

        return view('Ecole.Dashbord.medias.edit', compact('media'));
    }


    public function update(Request $request, $id)
    {
        $validatedRequest = $request->validate([
            'media' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:700'
        ]);

        DB::beginTransaction();

        try {

            $media = Media::find($id);

            if (Storage::exists('public/images/'. $media->media)) {
                Storage::delete('public/images/'. $media->media);
                $request->file('media')->store('public/images');
            }else {
                $success = false;
                DB::rollBack();
            }
            

            $name = $request->file('media')->hashName();
            $media->media = $name;
            $success = $media->save();

            DB::commit();
        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            $success = true;
        }

        if ($success) {
            session()->flash('success', 'Image Update successfully');
        }

        return back();
    }

    public function delete($id)
    {
        $media = Media::find($id);

        try {

            if (Storage::exists('public/images/'. $media->media)) {
                Storage::delete('public/images/'. $media->media);
            }
    
            $media->delete();
    
            session()->flash('success', 'Image Delete successfully');

        }catch (\Exception $e) {
            dd($e);
            session()->flash('success', 'Fail to Delete Image');
        }

        return back();
    }

    public function makeCover($id)
    {
        DB::beginTransaction();

        try {
            $medias = Media::all()->where('ecole_id', auth()->user()->id);
            foreach ($medias as $media) {
                $media->cover = 0;
                $media->save();
            }

            $med = Media::find($id);
            $med->cover = 1;
            $med->save();

            DB::commit();
        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }

        return back();
    }
}
