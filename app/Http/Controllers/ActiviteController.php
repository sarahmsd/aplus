<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::all();
       return view('Ecole.Dashbord.Activites.activites', compact('activites'));
    }

public function show($id)
{
    $activite = Activite::findOrfail($id);

    return view('Ecole.Dashbord.Activites.details_activite',compact('activite'));
}
public function edit($id)
{
    $activite = Activite::findOrfail($id);

    return view('Ecole.Dashbord.Activites.edit_activite',compact('activite'));
}

    public function add()
    {
       return view('Ecole.Dashbord.Activites.add_activite');
    }



    public function save(Request $request)
    {
        $activite = new Activite();

        $activite->nomActivite = $request->nomActivite;
        $activite->descriptionActivite = $request->descriptionActivite;
        $activite->ecole_id = $request->ecole_id;
        $files = $request->file('Image');
        $extension = $files->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $files->move('Activite/',$filename);
        $activite->Image = $filename;

        $activite->save();


        return back();


    }


    public function update(Request $request,$id)
    {
        $activite = Activite::findOrfail($id);

        $activite->nomActivite = $request->nomActivite;
        $activite->descriptionActivite = $request->descriptionActivite;
        // $activite->ecole_id = $request->ecole_id;



        if ( $request->hasfile('Image')) {

            $destination = 'Activite/'.$activite->image;
            if (File::exists($destination)) {
               File::delete($destination);
            }
         }

        if ( $request->hasfile('Image')) {
            $file =$request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Activite/',$filename);
            $activite->Image =  $filename;
         }


        $activite->update();


        return back();


    }


    public function delete($id)
    {
        $data =Activite::find($id);

        $data->delete();

        return redirect(route('activite.index'));
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');

        # code...
        $activites = Activite::where('nomActivite', 'like',"%$q%")
        ->orWhere('descriptionActivite', 'like', "%$q%")->get();


        return view('Ecole.Dashbord.Activites.search',compact('activites'));

    }
}


