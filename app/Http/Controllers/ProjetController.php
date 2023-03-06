<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ecole;
use App\Models\Employeur;
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
        return view('projet.validation', compact('projets'));
    }

    public function projetsValides() {
        $projets = Projet::where('status', 1)->get();

        return view('Employeur.Dashboard/projets', compact('projets'));
    }

    public function validation($id)
    {
        $projet = Projet::findOrFail($id);

        $valider = $projet->status = 1;
        
        if ($valider) {
            $projet->save();
            return back();
        }
    }

    public function liste()
    {
        $projets = Projet::where('user_id', auth()->user()->id)->paginate(9);

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
        $investisseur = Employeur::where('user_id', auth()->user()->id)->first();
        $dernierProjets = Projet::orderBy('id', 'desc')->take(4)->get();

        if (auth()->user()->profil == 'Employeur') {
            return view('Employeur.Dashboard/projet', compact('projet', 'dernierProjets', 'investisseur'));
        }elseif (auth()->user()->profil == 'Candidat' || 'admin') {
            return view('Projet.porteurs.details_projet1', compact('projet'));
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

        $success = $projet->save();

        $users = User::where('profil', 'Employeur')->get();

        foreach ($users  as $user) {
            $investisseur = new Investisseur();
            $investisseur->user_id = $user->id;
            $investisseur->save();

             if ($projet->save()) {
                $projet->investisseurs()->attach($investisseur->id);
            }
        }
        $success ? session()->flash('success', 'Le projet a été ajouté avec success!')
            : session()->flash('error', 'Le projet n\'a pas pu être ajouté!');

        return redirect()->route('projet.liste');
    }

    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('Projet.form_soumission_edit', compact('projet'));
    }


    public function update(Request $request, $id) {

        $projet = Projet::find($id);
        
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

        $success = $projet->update();

        $success ? session()->flash('success', 'Le projet a été modifié avec success!')
            : session()->flash('error', 'Le projet n\'a pas pu être modifié!');

        return back();
    }

    public function delete($id)
    {
        $projet = Projet::find($id);
        $success = $projet->delete();

        $success ? session()->flash('success', 'Le projet a été supprimé avec success!')
            : session()->flash('error', 'Le projet n\'a pas pu être supprimé!');

        return redirect()->route('projet.liste');
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');.
        $projets = Projet::where('nomStartup', 'like',"%$q%")
        ->orWhere('description', 'like', "%$q%")->get();

        return view('Projet.investisseurs.search',compact('projets'));
    }

    public function investir($id)
    {
        $projet = Projet::find($id);
        $investisseur = Employeur::where('user_id', auth()->user()->id)->get();
        $projet->investisseurs()->attach($investisseur);

        $success = $projet->save();

        return $success
                ? back()->withSuccess('L\'investissement a bien reussie!')
                : back()->withSuccess('Une erreur est survenue! L\'investissement n\'a pas pu être effectué.');
    }

}
