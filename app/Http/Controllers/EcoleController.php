<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use App\Models\Activite;
use App\Models\Cycle;
use App\Models\Ecole;
use App\Models\Filiere;
use App\Models\EcoleEns;
use App\Models\EnsCycle;
use App\Models\Departement;
use App\Models\Enseignement;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\systemeEducatif;
use Illuminate\Support\Facades\DB;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecoles = Ecole::all();
        return view('Ecole.list',compact('ecoles'));
    }

    public function dashbord()
    {
        // $ecoles = Ecole::all();
        $enseignements = Enseignement::all();
        // $enseignements = Enseignement::where('system');
        $cycles = Cycle::all();
        $departements = Departement::all();
        $filieres = Filiere::all();
        return view('Ecole.Dashbord.dashboard-ecole',compact('enseignements','cycles','departements','filieres'));
    }




    public function test()
    {
        $systemeEducatifs = systemeEducatif::all();
        $enseignements = Enseignement::all();
        $cycles = Cycle::all();
        return view('Ecole.ecole', compact('systemeEducatifs','enseignements','cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ecole.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $ecole = new Ecole();
            $ecole->user_id = auth()->user()->id;
            $ecole->systemeEducatif_id = $request->systemeEducatif_id;
            $ecole->etablissement = $request->etablissement;

            $ecole->ecole = $request->ecole;
            $ecole->sigle = $request->sigle;
            $ecole->email = $request->email;
            $ecole->adresse = $request->adresse;
            $ecole->telephone = $request->telephone;
            $ecole->siteWeb = $request->siteWeb;
            $ecole->linkedin = $request->linkedin;
            $ecole->description = $request->description;
    
            $ecole->save();

            foreach ($request->enseignement as $key=>$enseignement) {
                $ecoleEns = new EcoleEns();
                $ecoleEns->enseignement_id = $request->enseignement[$key];
                $ecoleEns->ecole_id = $ecole->id;
                $ecoleEns->save();
                $ecole->Ecoleens()->attach($ecoleEns->id);
            }

            foreach ($request->cycle as $key => $cycle) {
                $c = Cycle::find($cycle);
                $EnsCycle = new EnsCycle();
                $EnsCycle->cycle_id = $request->cycle[$key];
                $EnsCycle->ecole_id = $ecole->id;
                $EnsCycle->enseignement_id = $c->enseignement_id;
                $EnsCycle->save();

                $ecoleEns->EnsCycles()->attach($EnsCycle->id);
            }

            DB::commit();
            $success = true;
        }catch (\Exception $e) {
            $success = false;
            DB::rollBack();
            dd($e);
        }

        if ($success) {
            return redirect()->route('Ecole.dashbord')->withSuccess('Votre compte a bien été ajouté!');
        }else {
            return back()->withFail('Nous avons rencontré un problème en ajoutant votre compte!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecole = Ecole::find($id);
        $cover = Media::where([
            'ecole_id' => $id,
            'cover' => 1
        ])->first();

        $gallery = Media::all()->where('ecole_id', $id)->take(4);
        $activites = Activite::all()->where('ecole_id', $ecole->id)->take(3);
        foreach ($activites as $key => $activite) {
            $activite->media = Media::where('activite_id', $activite->id)->first();
        }

        $accreditations = Accreditation::all();

        return view('Ecole.show', compact('ecole', 'cover', 'gallery', 'activites', 'accreditations'));
    }

    public function profil($id)
    {
        $ecole = Ecole::find($id);
        $cover = Media::where([
            'ecole_id' => $id,
            'cover' => 1
        ])->first();

        $logo = Media::where([
            'ecole_id' => $id,
            'logo' => 1
        ])->first();

        return view('Ecole.Dashbord.profil', compact('ecole', 'cover', 'logo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::beginTransaction();
        
        $ecole = Ecole::where('user_id', auth()->user()->id)->first();

        try {

            if ($request->ecole == $ecole->ecole) {

                $departements = Departement::all();
                
                dd($departements->ecoles);

                //$ecole->delete();

                DB::commit();
                //return redirect('home')->withSuccess('Compte supprimé');
            }else {
                return back()->withFail('Une erreur est survenue');
            }
        }catch (\Exception $e) {
            DB::rollBack();
            return back()->withFail('Une erreur est survenue');
            dd($e);
        }
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');


        $ecoles = Ecole::where('ecole', 'like', "%$q%")->orWhere('description', 'like', "%$q%")->orWhere('etablissement', 'like', "%$q%")->orWhere('adresse', 'like', "%$q%")->get();

        return view('Ecole.search', compact('ecoles'));


    }


    public function configuration()
    {
        $systemeEducatifs = systemeEducatif::all();
        foreach ($systemeEducatifs as $key => $se) {
            $enseignements = Enseignement::where('systemeEducatif_id', $se->id)->get();
            $se->enseignements = $enseignements;
            foreach ($enseignements as $key => $enseignement) {
                $enseignement->cycles = Cycle::all()->where('enseignement_id', $enseignement->id);
            }
        }
        return view('Ecole.Dashbord.configurations', compact('systemeEducatifs'));
    }
}
