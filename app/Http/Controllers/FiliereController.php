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
        foreach ($filieres as $filiere){
            $departement = Departement::find($filiere->departement_id);
            $filiere->departement = $departement;
        }

       return view('Ecole.Dashbord.Filieres.filieres', compact('filieres'));
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
        return view('Ecole.Dashbord.Filieres.edit_filiere', compact('filiere', 'acreditations'));
    }

    public function add()
    {
        $acreditations =  Accreditation::all();
        return view('Ecole.Dashbord.Filieres.add_filiere', compact('acreditations'));
    }

    public function save(Request $request)
    {
        $filiere = new Filiere();
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->departement_id = $request->departement_id;
        $filiere->descriptionFiliere = $request->descriptionFiliere;
        $success = $filiere->save();


        if ($request->acreditation != null){
            foreach ($request->acreditation as $key=>$acreditation) {
                $acreditation = $request->acreditation[$key];
                $filiere->acreditations()->attach($acreditation);
            }
        }

        if ($success) {
            return back()->withSuccess('La filière a bien été ajouté!');
        }else {
            return back()->withFail('L\'ajout de la filière a echouée!');
        }
    }

    public function update(Request $request, $id)
    {
        $filiere = Filiere::findOrfail($id);
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->departement_id = $request->departement_id;
        $filiere->descriptionFiliere = $request->descriptionFiliere;

        if ($request->acreditation != null) {
            foreach ($request->acreditation as $key => $acreditation) {
                $acreditation = $request->acreditation[$key];
                $filiere->accreditations()->attach($acreditation);
            }
        }

        $success = $filiere->update();

        if ($success) {
            return redirect(route('filiere.index'))->withSuccess('La modification a reussie!');
        }else {
            return redirect(route('filiere.index'))->withFail('La modification a echouée!');
        }
    }

    public function admission($id)
    {
        $filiere = Filiere::find($id);
        return view('Ecole.Dashbord.Filieres.admission', compact('filiere'));
    }

    public function delete($id)
    {
        $data =Filiere::find($id);

        $success = $data->delete();

        if ($success) {
            return redirect(route('filiere.index'))->withSuccess('La suppression a reussie!');
        }else {
            return redirect(route('filiere.index'))->withFail('La suppression a echouée!');
        }
    }

    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');

        $filieres = Filiere::where('nomFiliere', 'like', "%$q%")
        ->orWhere('descriptionFiliere', 'like', "%$q%")->get();

        return view('Ecole.Dashbord.Filieres.search', compact('filieres'));
    }
}
