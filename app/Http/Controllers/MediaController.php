<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
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
        $ecole = Ecole::where('user_id', auth()->user()->id)->first();
        $medias = Media::paginate(20)->where('ecole_id', $ecole->id);
        return view('Ecole.Dashbord.Medias.index', compact('medias'));
    }

    public function create()
    {
        return view('Ecole.Dashbord.Medias.create');
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

            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $request->file('media')->store('public/images');
            $name = $request->file('media')->hashName();

            $media = new Media();
            $media->media = $name;
            $media->ecole_id = $ecole->id;
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

        return view('Ecole.Dashbord.Medias.edit', compact('media'));
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
            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $medias = Media::all()->where('ecole_id', $ecole->id);
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

    public function addLogo(Request $request)
    {
        DB::beginTransaction();

        try {
            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $medias = Media::all()->where('ecole_id', $ecole->id);
            foreach ($medias as $media) {
                if ($media->logo == 1)
                    $media->delete($media->id);
            }

            $request->file('logo')->store('public/images');
            $name = $request->file('logo')->hashName();

            $media = new Media();
            $media->media = $name;
            $media->ecole_id = $ecole->id;
            $media->logo = 1;

            $media->save();

            DB::commit();
            $success = true;
        }catch (\Exception $e) {
            DB::rollBack();
            $success = false;
            dd($e);
        }

        if ($success)
            return back()->withSuccess('Logo ajouté');
        else 
            return back()->withSuccess('Une erreur est survenue');
    }

    public function addCover(Request $request)
    {
        DB::beginTransaction();

        try {
            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $medias = Media::all()->where('ecole_id', $ecole->id);
            foreach ($medias as $media) {
                $media->cover = 0;
                $media->save();
            }

            $request->file('cover')->store('public/images');
            $name = $request->file('cover')->hashName();

            $media = new Media();
            $media->media = $name;
            $media->ecole_id = $ecole->id;
            $media->cover = 1;

            $media->save();

            DB::commit();
            $success = true;
        }catch (\Exception $e) {
            DB::rollBack();
            $success = false;
            dd($e);
        }

        if ($success)
            return back()->withSuccess('Logo ajouté');
        else 
            return back()->withSuccess('Une erreur est survenue');
    }

    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);
        $q = request()->input('q');
        
        $medias = Media::where('media', 'like',"%$q%")
        ->orWhere('media', 'like', "%$q%")->get();

        return view('Ecole.Dashbord.Medias.index', compact('medias'));
    }
}