<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\DepartementEcole;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartementController extends Controller
{


    public function index()
    {
        $departements = Departement::all();
        foreach ($departements as $departement){
            $filieres = Filiere::where('departement_id', $departement->id)->get();
        }

        return view('Ecole.Dashbord.Departements.departements', compact('filieres'));

    }

    public function add()
    {

        return view('Ecole.Dashbord.Departements.add_departement');

    }

    public function show($id)
    {
        $departement = Departement::findOrfail($id);
        $filieres = Filiere::where('departement_id', $id)->get();

        return view('Ecole.Dashbord.Departements.details_departement', compact('departement', 'filieres'));
    }

    public function edit($id)
    {
        $departement = Departement::findOrfail($id);

        return view('Ecole.Dashbord.Departements.edit_departement', compact('departement'));
    }


    public function save(Request $request)
    {

        $id = $request->ecole_id;

        $departement = new Departement();
        $departement->nomDepartement = $request->nomDepartement;
        $departement->descriptionDepartement = $request->descriptionDepartement;
        $success = $departement->save();

        $departement->ecoles()->attach($id);

        if ($success) {
            return redirect(route('departement.index'))->withSuccess('Le departement a bien été ajouté!');
        }else {
            return redirect(route('departement.index'))->withFail('L\'ajout du département a echouée!');
        }
    }


    public function update(Request $request, $id)
    {
        $data =Departement::find($id);
        $data->nomDepartement =$request->nomDepartement;
        $data->descriptionDepartement =$request->descriptionDepartement;

        $success = $data->update();

        if ($success) {
            return redirect(route('show.departement', $id))->withSuccess('La modification a reussie!');
        }else {
            return redirect(route('show.departement', $id))->withFail('La modification a echouée!');
        }
    }


    public function delete($id)
    {
        $success = false;
        
        DB::beginTransaction();
        
        try {
            $data = Departement::find($id);

            $data->delete();

            Filiere::where('departement_id', $id)->delete();

            DB::commit();
            $success = true;

        }catch (\Exception $e) {
            $success = false;
            DB::rollback();
        }

        if ($success) {
            return redirect(route('departement.index'))->withSuccess('Suppression reussie!');
        }else {
            return redirect(route('departement.index'))->withFail('La suppression a echouée!');
        }
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');

        # code...
        $departements = Departement::where('nomDepartement', 'like',"%$q%")
        ->orWhere('descriptionDepartement', 'like', "%$q%")->get();


        return view('Ecole.Dashbord.Departements.search',compact('departements'));

    }

}
