<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ecole;
use App\Models\Projet;
use App\Models\Investisseur;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        return view('Projet.index');
    }

    public function validationListe()
    {
        $projets = Projet::where('status', 0)->get();
        return view('projet.validation',compact('projets'));
    }

    public function validation(Request $request)
    {
        $projet = Projet::findOrFail($request->projet);


        $valider = $projet->fill(['status' => 1]);
        if ($valider->isDirty()) {
            $valider->save();

            return back();
        }
    }



    public function liste()
    {
        $projets = Projet::where('status', 1)->get();

        if (auth()->user()->profil == 'Employeur') {
            return view('Projet.investisseurs.dashbord',compact('projets'));
           }
        elseif (auth()->user()->profil == 'Candidat' || 'admin') {
            return view('Projet.porteurs.list1', compact('projets'));
        }


    }


    public function show($id)
    {

       $projet = Projet::find($id);

        // $investisseur = Investisseur::where('status', 1)->get();
        $dernierProjets = Projet::orderBy('id', 'desc')->take(4)->get();

        if (auth()->user()->profil == 'Employeur') {
            return view('Projet.investisseurs.details_projet_investisseur1',compact('projet','dernierProjets'));
           }
        elseif (auth()->user()->profil == 'Candidat' || 'admin') {
            return view('Projet.porteurs.details_projet1',compact('projet'));
        }






    }


    public function create()
    {
        return view('Projet.form_soumission1');
    }

    public function save(Request $request)
    {
        $projet = new Projet();
        $projet->user_id = $request->user_id;
        $projet->NomComplet = $request->NomComplet;
        $projet->email = $request->email;
        $projet->telephone = $request->telephone;
        $projet->nomStartup = $request->nomStartup;
        $projet->description = $request->description;
        $projet->siteWeb = $request->siteWeb;
        $projet->secteur_id = $request->secteur_id;
        $projet->objectif = $request->objectif;
        $projet->debutProjet = $request->debutProjet;
        $projet->connaitreA = $request->connaitreA;
        $projet->motivation = $request->motivation;
        $projet->autreChoseAsavoir = $request->autreChoseAsavoir;
        $projet->collaborateurs = $request->collaborateurs;
        $projet->demarcheProjet = $request->demarcheProjet;

        $projet->save();

        $users = User::where('profil', 'Employeur')->get();

        foreach ($users  as $user) {
            $investisseur = new Investisseur();
            $investisseur->user_id = $user->id;
            $investisseur->save();

             if ($projet->save()) {
                $projet->investisseurs()->attach($investisseur->id);
            }
        }

        return back();
    }



    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');

        # code...
        $projets = Projet::where('nomStartup', 'like',"%$q%")
        ->orWhere('description', 'like', "%$q%")->get();


        return view('Projet.investisseurs.search',compact('projets'));


    }


}
