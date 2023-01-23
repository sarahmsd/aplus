<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use App\Models\Departement;
use App\Models\Filiere;
use Elastic\Elasticsearch\Endpoints\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $filiere = new Filiere();
            $filiere->nomFiliere = $request->nomFiliere;
            $filiere->departement_id = $request->departement_id;
            $filiere->descriptionFiliere = $request->descriptionFiliere;

            $filiere->save();

            if ($request->acreditation) {

                foreach ($request->acreditation as $key=>$acc) {
                    $filiere->accreditations()->attach($acc);
                }
            }
            DB::commit();
            $success = false;
        } catch (\Exception $e){
            DB::rollBack();
            $success = false;
            dd($e);
        }

        if ($success) {
            return back()->withSuccess('La filière a bien été ajouté!');
        }else {
            return back()->withFail('L\'ajout de la filière a echouée!');
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $filiere = Filiere::findOrfail($id);
            if ($request->acreditation != null) {
                foreach ($request->acreditation as $acreditation) {
                    $acc = Accreditation::find($acreditation);
                    foreach ($acc->filieres as $a) {
                        if ($a->id == $filiere->id) {
                            $filiere->accreditations()->detach();
                        }
                    }
                }
                
                foreach ($request->acreditation as $acreditation){
                    $filiere->accreditations()->attach($acreditation);
                }
            }

            if ($request->nomFiliere != null) {
                $filiere->nomFiliere = $request->nomFiliere;
                $filiere->departement_id = $request->departement_id;
                $filiere->descriptionFiliere = $request->descriptionFiliere;
            }

            $success = $filiere->update();

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            $success = false;
            Ddd($e);
        }

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
        DB::beginTransaction();

        try {
            $filiere = Filiere::find($id);
            $filiere->accreditations()->detach();
            $filiere->delete();
            $success = true;
        }catch (\Exception $e){
            DB::rollBack();
            $success = false;
            dd($e);
        }

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
