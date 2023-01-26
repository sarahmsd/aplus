<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Lieu;
use App\Models\User;
use App\Models\Offre;
use App\Models\Domaine;
use App\Models\Candidat;
use App\Models\Employeur;
use App\Models\Candidature;
use App\Models\ContratMode;
use App\Models\ContratType;
use App\Models\Description;
use App\Models\Recrutement;
use Illuminate\Http\Request;
use App\Models\MethodeTravail;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeur = '';
        $description = '';

        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        //dd($employeur->id);
        $offres = Offre::with(['lieux'])->with(['contrat_modes'])->with(['domaines'])->where('employeur', $employeur->id)->latest()->get();
        /*foreach ($offres as $offre) {
            $description = Description::where('id', $offre->description)->first();
            $deadline = $description->dateLimite;
            $today = Carbon::now();
                //dd($deadline <= $today);

            if ($deadline <= $today) {
               $offre->archive();
            }


        }
        */
       //dd($offres);
        $contratModes = ContratMode::all();
        return view('Employeur.Dashboard/offres', compact('offres', 'employeur', 'description', 'contratModes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $employeur = Employeur::where('user_id', $user->id)->first();
        //dd($employeur->id);
        $contratTypes = ContratType::all();
        $domaines = Domaine::all();
        $methodeTravails = MethodeTravail::all();
        $contratModes = ContratMode::all();
        return view('Offre.create', compact('contratTypes', 'domaines', 'methodeTravails', 'contratModes', 'employeur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
            $request->validate([
             'nom' => 'required|max:255',
             'contrat_type' => 'required',
             'domaines' => 'required',
             'lieu'    => 'required',
             'contratModes' => 'required',
             'methodeTravails' => 'required',
             'description' => 'required',
            'dateLimite' => 'required|date|after:tomorrow'
        ]);

        $offre =  Offre::create([
            'employeur' => $request->employeur_id,
            'nom' => $request->nom,
            'contrat_type' => $request->contrat_type,
            'description' => $request->description,
            'dateLimite' => $request->dateLimite,
        ]);
        
        $lieu =  Lieu::create([
            'nom' => $request->lieu,
        ]);
        foreach ($request->domaines as $key => $domaine) {

        $offre->domaines()->attach($domaine);

        }

        foreach ($request->contratModes as $key => $contratMode) {

            $offre->contrat_modes()->attach($contratMode);

            }

        foreach ($request->methodeTravails as $key => $methodeTravail) {

                $offre->methode_travails()->attach($methodeTravail);

                }
         $offre->lieux()->attach($lieu);

        

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = auth()->user();
         $candidat = Candidat::where('user_id', $user->id)->first();

         $offres = Offre::with(['lieux'])->with(['contrat_modes'])->latest()->get();

        /* foreach ($offres as $offre) {
             $structure = Employeur::where('id', $offre->employeur)->first();
             $descriptions = Description::where('id', $offre->description)->first();
             $deadline = $descriptions->dateLimite;
             $today = Carbon::now();
                 //dd($deadline <= $today);

             if ($deadline <= $today) {
                $offre->archive();
             }
         }
         */


         $entreprise = Employeur::where('user_id', $user->id)->first();
        // dd($recrutement);

        $offre = Offre::with(['contrat_modes'])->with(['lieux'])->with(['domaines'])
        ->with(['methode_travails'])->find($id);
        $domaines = Domaine::all();
        $contratModes = ContratMode::all();

        $CandidatCand ='';
        $candidatureEnt = '';
        //dd($offre);

        if (isset($offre) && isset($candidat)) {

        $CandidatCand = Candidature::where('offre_id', $offre->id)->where('profil', 'Candidat')->where('user_id', $user->id)->first();
        }
        //dd($CandidatCand);

        if (isset($offre) && isset($entreprise)) {

        $candidatureEnt = Candidature::where('offre_id', $offre->id)->where('profil', 'Employeur')->where('user_id', $user->id)->first();
        }

        $description = Description::where('id', $offre->description)->first();
        $contratType  = ContratType::where('id', $offre->contrat_type)->first();
        $employeur = Employeur::where('id', $offre->employeur)->first();
        $candidatureCands = Candidature::where('offre_id', $offre->id)->where('profil', 'Candidat')->get();
        $candidatureEmps = Candidature::where('offre_id', $offre->id)->where('profil', 'Employeur')->get();

        $profilCandidats = [];
        $postulant = '';
        $recrutement = '';

               $profilCandidats = DB::table('candidats as C')
              ->select('C.*')
              ->join('candidatures', 'C.user_id', '=', 'candidatures.user_id')
              ->groupBy('C.id')
              ->where('profil', 'Candidat')
              ->where('offre_id', $offre->id)
              ->get();
                //dd($profilCandidats);


        //dd($candidatureCands);
        foreach ($candidatureCands as $cand) {


        $recrutement = Recrutement::where('candidature_id', $cand->id)->first();


        }

        $profilEmployeurs = [];

            $profilEmployeurs = DB::table('employeurs as E')
            ->select('E.*')
            ->join('candidatures', 'E.user_id', '=', 'candidatures.user_id')
            ->groupBy('E.id')
            ->where('profil', 'Employeur')
            ->where('offre_id', $offre->id)
            ->get();

        //dd($profilEmployeurs);

        return view('Offre.show', compact('offre', 'offres', 'structure', 'descriptions', 'domaines', 'contratModes', 'description', 'postulant', 'contratType', 'candidatureEnt', 'employeur', 'user', 'profilCandidats', 'profilEmployeurs', 'candidat', 'entreprise', 'candidatureCands', 'candidatureEmps', 'recrutement', 'CandidatCand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = Offre::find($id);
        $user = auth()->user();
        $employeur = Employeur::where('user_id', $user->id)->first();
        //dd($employeur->id);
        $contratTypes = ContratType::all();
        $domaines = Domaine::all();
        $methodeTravails = MethodeTravail::all();
        $contratModes = ContratMode::all();
        return view('Offre.edit', compact('contratTypes', 'domaines', 'methodeTravails', 'contratModes', 'employeur', 'offre'));
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

        $offre = Offre::where('id' ,$id)->first();

        $offre->nom = $request->nom;
        $offre->description =$request->description;
        $offre->dateLimite = $request->dateLimite;

        $offre->save();

        return view('Employeur.Dashboard/offres');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function recherche(Request $request){
        $employeur = '';
        $description = '';

        $domaine = $request->domaine;
        $lieu = $request->lieu;
        $post = $request->post;
        $contratTypes = $request->type;
        //dd($request);

        $offres = DB::table('offres as O')
        ->select('O.*', 'lieus.nom as lieu', 'contrat_modes.nom as contrat_mode')
        ->join('domaine_offre', 'O.id', '=', 'domaine_offre.offre_id')
        ->join('lieu_offre', 'O.id', '=', 'lieu_offre.offre_id')
        ->join('lieus', 'lieu_offre.lieu_id', '=', 'lieus.id')
        ->join('contrat_mode_offre', 'O.id', '=', 'contrat_mode_offre.offre_id')
        ->join('contrat_modes', 'contrat_mode_offre.contrat_mode_id', '=', 'contrat_modes.id')
        ->where('O.nom', $post)
        ->orWhere('domaine_offre.domaine_id', $domaine)
        ->orWhere('lieus.nom', $lieu)
        ->orWhere('contrat_modes.nom', $contratTypes)
        ->groupBy('O.id')
        ->groupBy('lieu')
        ->groupBy('contrat_mode')
        ->get();
        $domaines = Domaine::all();
        $contratModes = ContratMode::all();
/*
        foreach ($offres as $offre) {

            $employeur = Employeur::where('id', $offre->employeur)->first();
            $description = Description::where('id', $offre->description)->first();
            $deadline = $description->dateLimite;
            $today = Carbon::now();
              //dd($contrat_modes);
            if ($deadline <= $today) {
               $offre->archive();
            }

        }
        */
        return view('home', compact('offres', 'employeur', 'description', 'domaines', 'contratModes'));

    }

    public function offre($id)
    {
        $user = auth()->user();
        $candidat = Candidat::where('user_id', $user->id)->first();

        $offres = Offre::with(['lieux'])->with(['contrat_modes'])->latest()->get();

        foreach ($offres as $offre) {
            $structure = Employeur::where('id', $offre->employeur)->first();
            //$descriptions = Description::where('id', $offre->description)->first();
            /*$deadline = $descriptions->dateLimite;
            $today = Carbon::now();
                //dd($deadline <= $today);

            if ($deadline <= $today) {
               $offre->archive();
            }
            */
        }


        $entreprise = Employeur::where('user_id', $user->id)->first();
       // dd($recrutement);

       $offre = Offre::with(['contrat_modes'])->with(['lieux'])->with(['domaines'])
       ->with(['methode_travails'])->find($id);
       $domaines = Domaine::all();
       $contratModes = ContratMode::all();

       $CandidatCand ='';
       $candidatureEnt = '';
       //dd($offre);

       if (isset($offre) && isset($candidat)) {

       $CandidatCand = Candidature::where('offre_id', $offre->id)->where('profil', 'Candidat')->where('user_id', $user->id)->first();
       }
       //dd($CandidatCand);

       if (isset($offre) && isset($entreprise)) {

       $candidatureEnt = Candidature::where('offre_id', $offre->id)->where('profil', 'Employeur')->where('user_id', $user->id)->first();
       }

       //$description = Description::where('id', $offre->description)->first();
       $contratType  = ContratType::where('id', $offre->contrat_type)->first();
       $employeur = Employeur::where('id', $offre->employeur)->first();
       $candidatureCands = Candidature::where('offre_id', $offre->id)->where('profil', 'Candidat')->get();
       $candidatureEmps = Candidature::where('offre_id', $offre->id)->where('profil', 'Employeur')->get();

       $profilCandidats = [];
       $postulant = '';
       $recrutement = '';

              $profilCandidats = DB::table('candidats as C')
             ->select('C.*')
             ->join('candidatures', 'C.user_id', '=', 'candidatures.user_id')
             ->groupBy('C.id')
             ->where('profil', 'Candidat')
             ->where('offre_id', $offre->id)
             ->get();
               //dd($profilCandidats);


       //dd($candidatureCands);
       foreach ($candidatureCands as $cand) {


       $recrutement = Recrutement::where('candidature_id', $cand->id)->first();


       }

       $profilEmployeurs = [];

           $profilEmployeurs = DB::table('employeurs as E')
           ->select('E.*')
           ->join('candidatures', 'E.user_id', '=', 'candidatures.user_id')
           ->groupBy('E.id')
           ->where('profil', 'Employeur')
           ->where('offre_id', $offre->id)
           ->get();

       //dd($profilEmployeurs);

       return view('Employeur.Dashboard/offre', compact('offre', 'offres', 'structure', 'domaines', 'contratModes', 'postulant', 'contratType', 'candidatureEnt', 'employeur', 'user', 'profilCandidats', 'profilEmployeurs', 'candidat', 'entreprise', 'candidatureCands', 'candidatureEmps', 'recrutement', 'CandidatCand'));
   }
}
