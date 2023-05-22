<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\DepartementEcole;
use App\Models\Ecole;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartementController extends Controller
{
    public function index()
    {
        //$departements = auth()->user()->ecole->departements;
        return view('Ecole.Dashbord.Departements.departements');
    }

    public function add()
    {
        return view('Ecole.Dashbord.Departements.add_departement');
    }

    public function show()
    {
        //$departement = Departement::findOrfail($id);
        //$filieres = Filiere::where('departement_id', $id)->get();

        return view('Ecole.Dashbord.Departements.details_departement');
    }

    public function edit($id)
    {
        $departement = Departement::findOrfail($id);

        return view('Ecole.Dashbord.Departements.edit_departement', compact('departement'));
    }


    public function save(Request $request)
    {
        DB::beginTransaction();
        try {
            $id = $request->ecole_id;

            $departement = new Departement();
            $departement->nomDepartement = $request->nomDepartement;
            $departement->descriptionDepartement = $request->descriptionDepartement;
            $success = $departement->save();

            if($request->filieres){
                foreach ($request->filieres as $filiere) {
                    $f = new Filiere();
                    $f->nomFiliere = $filiere['nom'];
                    $f->descriptionFiliere = '';
                    $f->departement_id = $departement->id;

                    $f->save();
                }
            }

            $departement->ecoles()->attach($id);
            DB::commit();
            return response()->json([
                'success' => 'Le departement a bien ete ajoute'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json($e->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        $data =Departement::find($id);
        $data->nomDepartement =$request->nomDepartement;
        $data->descriptionDepartement =$request->descriptionDepartement;

        $success = $data->update();

        if ($success) {
            if(auth()->user() && auth()->user()->profil == 'admin')
                return redirect(route('admin.ecoles.index'))->withSuccess('La modification a reussie!');
            else
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
            $data->ecoles()->detach();
            Filiere::where('departement_id', $id)->delete();
            $data->delete();

            DB::commit();
            $success = true;

        }catch (\Exception $e) {
            $success = false;
            DB::rollback();
            dd($e);
        }

        if ($success) {
            if (auth()->user() && auth()->user()->profil == 'admin')
                return redirect(route('admin.ecoles.index'))->withSuccess('Suppression reussie!');
            else
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

        $departements = Departement::where('nomDepartement', 'like',"%$q%")
        ->orWhere('descriptionDepartement', 'like', "%$q%")->get();


        return view('Ecole.Dashbord.Departements.search',compact('departements'));

    }
}
