<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Ecole;
use App\Models\Media;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ActiviteController extends Controller
{
    public function index()
    {
        return view('Ecole.activites');
    }

    public function activites($id) {
        $activites = Activite::where("ecole_id", $id)->get();
        return response()->json($activites);
    }

    public function show()
    {        
        return view('Ecole.details_activite');
    }

    public function getDetailsActivite($id)
    {
        $activite = Activite::findOrfail($id);
        $ecole = Ecole::find($activite->ecole_id);
        $activites = Activite::where('ecole_id', $ecole->id)->get();
        $medias = Media::all()
                    ->where('activite_id', $id)
                    ->where('ecole_id', $ecole->id);
        return response()->json([
            'activite' => $activite,
            'activites' => $activites,
            'medias' => $medias,
            'ecole' => $ecole,
        ]);
    }

    public function edit($id)
    {
        $activite = Activite::findOrfail($id);

        return view('Ecole.Dashbord.Activites.edit_activite', compact('activite'));
    }

    public function add()
    {
       return view('Ecole.Dashbord.Activites.add_activite');
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        
        try {
            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $activite = new Activite();
            $activite->nomActivite = $request->nomActivite;
            $activite->descriptionActivite = $request->descriptionActivite;
            $activite->ecole_id = $request->ecole_id;
            $activite->save();

            if ($request->files != null) {
                $name = $request->file('medias')->hashName();
                $request->file('medias')->move(public_path('images/ecoles/'.$ecole->id.'/'), $name);
                $media = new Media();
                $media->media = $name;
                $media->ecole_id = $request->ecole_id;
                $media->activite_id = $activite->id;
                $media->save();
            }
            $success = true;

            DB::commit();

        }catch (\Exception $e){
            dd($e);
            $success = false;
            DB::rollBack();
        }
        
        if ($success) {
            return back()->withSuccess('L\'activité a bien été ajouté!');
        }else {
            return back()->withFail('L\'ajout de l\'activité a echouée!');
        }
    }


    public function update(Request $request, $id)
    {
        $activite = Activite::findOrfail($id);

        $activite->nomActivite = $request->nomActivite;
        $activite->descriptionActivite = $request->descriptionActivite;

        if ($request->hasfile('Image')) {

            $destination = 'Activite/'.$activite->image;
            if (File::exists($destination)) {
               File::delete($destination);
            }
         }

        if ($request->hasfile('Image')) {
            $file =$request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Activite/', $filename);
            $activite->Image =  $filename;
        }

        $success = $activite->update();

        if ($success) {
            return back()->withSuccess('La modification a reussie!');
        }else {
            return back()->withFail('La modificatiion a echouée!');
        }

    }

    public function delete($id)
    {
        $activite = Activite::find($id);
        $ecole = Ecole::where('user_id', auth()->user()->id)->first();
        $medias = Media::where('activite_id', $id)->where('ecole_id', $ecole->id)->get();


        DB::beginTransaction();
        try {
            if (!$medias->isEmpty()) {
                foreach ($medias as $media) {
                    $media->delete($media->id);
                }
            }
           $activite->delete();
           $success = true;
           DB::commit();
        }catch (\Exception $e) {
            DB::rollBack();
            $success = false;
        }

       

        if ($success) {
            return redirect(route('activite.index'))->withSuccess('La suppression a reussie!');
        }else {
            return redirect(route('activite.index'))->withFail('La suppression a echouée!');
        }
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);
        $q = request()->input('q');
        
        $activites = Activite::where('nomActivite', 'like',"%$q%")
        ->orWhere('descriptionActivite', 'like', "%$q%")->get();

        return view('Ecole.Dashbord.Activites.search',compact('activites'));
    }
}


