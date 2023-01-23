<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use App\Models\Departement;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
       return view('Ecole.Dashbord.Filieres.filieres',compact('filieres'));
    }

    public function show($id)
    {
        $filiere = Filiere::findOrfail($id);

        return view('Ecole.Dashbord.Filieres.details_filiere',compact('filiere'));
    }
    public function edit($id)
    {
        $filiere = Filiere::findOrfail($id);
        $acreditations =  Accreditation::all();
        return view('Ecole.Dashbord.Filieres.edit_filiere',compact('filiere','acreditations'));
    }

    public function add()
    {
            $acreditations =  Accreditation::all();
        return view('Ecole.Dashbord.Filieres.add_filiere',compact('acreditations'));
    }
    public function save(Request $request)
    {


        $filiere = new Filiere();
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->departement_id = $request->departement_id;
        $filiere->descriptionFiliere = $request->descriptionFiliere;
        $filiere->save();

        foreach ($request->acreditation as $key=>$acreditation) {
                  $acreditation = $request->acreditation[$key];

                $filiere->acreditations()->attach($acreditation);

            }




        return back();


    }

    public function update(Request $request,$id)
    {


        $filiere = Filiere::findOrfail($id);
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->departement_id = $request->departement_id;
        $filiere->descriptionFiliere = $request->descriptionFiliere;
        $filiere->update();

        foreach ($request->acreditation as $key=>$acreditation) {
            $acreditation = $request->acreditation[$key];

                    $filiere->accreditations()->attach($acreditation);


      }




        return back();


    }
    public function admission($id)
    {
        $filiere = Filiere::find($id);
        return view('Ecole.Dashbord.Filieres.admission',compact('filiere'));
    }

    public function delete($id)
    {
        $data =Filiere::find($id);

        $data->delete();


        return redirect(route('filiere.index'));
    }

    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');

        # code...
        $filieres = Filiere::where('nomFiliere', 'like',"%$q%")
        ->orWhere('descriptionFiliere', 'like', "%$q%")->get();


        return view('Ecole.Dashbord.Filieres.search',compact('filieres'));

    }
}
