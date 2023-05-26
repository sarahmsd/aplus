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
        return view('Ecole.Dashbord.Departements.details_departement');
    }

    public function getDetails($id)
    {
        $departement = Departement::with('filieres')->find($id);

        return response()->json($departement);
    }

    public function editNom(Request $req)
    {
        $dept = Departement::find($req->id);

        $dept->nomDepartement = $req->nom;
        $dept->save();

        return response()->json($dept);
    }

    public function editDesc(Request $req)
    {
        $dept = Departement::find($req->id);

        $dept->descriptionDepartement = $req->desc;
        $dept->save();

        return response()->json($dept);
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

            return response()->json($success);
        }catch (\Exception $e) {
            $success = false;
            DB::rollback();
            return response()->json($success);
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
