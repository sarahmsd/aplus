<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use App\Models\Departement;
use App\Models\Ecole;
use App\Models\Filiere;
use Elastic\Elasticsearch\Endpoints\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class FiliereController extends Controller
{
    public function index()
    {        
        return view('Ecole.Dashbord.Filieres.filieres');
    }

    public function getFilieres($ecole_id)
    {
        $ecole = Ecole::find($ecole_id);
        $departements = $ecole->departements;
        $filieres = [];
        if (!empty($departements)) {
            foreach ($departements as $dept) {
                $filieres = Filiere::where('departement_id', $dept->id)->get();
            }                       
        }
        foreach ($filieres as $filiere) {
            $departement = Departement::find($filiere->departement_id);
            $filiere->departement = $departement;
        } 

        return response()->json($filieres);
    }

    public function getAccreds()
    {
        $accreds = Accreditation::all();
        
        return response()->json($accreds);
    }

    public function getDetails($id)
    {
        $filiere = Filiere::with('accreditations')->find($id);

        return response()->json($filiere);
    }

    public function editNom(Request $req)
    {
        $f = Filiere::find($req->id);

        $f->nomFiliere = $req->nom;
        $f->save();

        return response()->json($f);
    }

    public function editDesc(Request $req)
    {
        $f = Filiere::find($req->id);

        $f->descriptionFiliere = $req->desc;
        $f->save();

        return response()->json($f);
    }

    public function show()
    {        
        return view('Ecole.Dashbord.Filieres.details_filiere');
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
            if ($request->acreditations) {
                foreach ($request->acreditations as $acc) {
                    $filiere->accreditations()->attach($acc['id']);
                }
            }
            DB::commit();
            return response()->json([
                'success' => 'La filiere a bien ete ajoutee'
            ]);
        } catch (\Exception $e){
            DB::rollBack();
            return response()->json($e->getMessage());
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
            if(auth()->user() && auth()->user()->profil == 'admin')
                return redirect(route('admin.ecoles.index'))->withSuccess('La filière a bien été modifié!');
            else
                return redirect(route('filiere.index'))->withSuccess('La modification a reussie!');
        }else {
            return redirect(route('filiere.index'))->withFail('La modification a echouée!');
        }
    }

    public function getFiliereDetails($id)
    {
        $filiere = Filiere::with('accreditations')->find($id);
        $filieres = Filiere::where('departement_id', $filiere->departement_id)->get();
        $dept = Departement::find($filiere->departement_id);
        $ecoles = Ecole::with('departements')->get();

        $ecole = '';
        foreach ($ecoles as $e) {
            if($e->departements->contains($dept)){
                $ecole = $e;
            }
        }

        return response()->json([
            'filiere' => $filiere,
            'filieres' => $filieres,
            'ecole' => $ecole
        ]);
    }

    public function formation()
    {        
        return view('Ecole.Dashbord.Filieres.admission');
    }

    public function delete($id)
    {
        DB::beginTransaction();

        try {
            $filiere = Filiere::find($id);
            $filiere->accreditations()->detach();
            $filiere->delete();
            $success = true;

            return response()->json($success);

        }catch (\Exception $e){
            DB::rollBack();
            $success = false;
            return response()->json($success);
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
