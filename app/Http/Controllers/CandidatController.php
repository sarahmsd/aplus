<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Role;
use App\Models\Offre;
use App\Models\Divers;
use App\Models\Candidat;
use App\Models\Employeur;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        $offres = Offre::where('employeur', $employeur->id)->get();
        $candidats = '';
        $candidature = '';
        foreach ($offres as $offre) {

            $candidats = DB::table('candidats as C')
            ->select('C.*', 'offres.nom', 'candidatures.cv')
            ->join('candidatures', 'C.user_id', 'candidatures.user_id')
            ->join('offres', 'candidatures.offre_id', 'offres.id')
            ->where('offres.id', $offre->id)
            ->groupBy('offres.nom')
            ->groupBy('C.id')
            ->groupBy('candidatures.cv')
            ->get();

        //dd($candidats);
        foreach ($candidats as $candidat) {
            if (isset($candidat)) {

            $candidature = Candidature::where('user_id', $candidat->user_id)->first();
            }
        }
    }
        $formation ='';
        $experience ='';
        $divers ='';
        $cv ='';

        // foreach ($candidats as $candidat) {
        //     if (isset($candidat)) {


        //     $cv = Cv::where('candidat_id', $candidat->id)->first();
        //     }
        //     if (isset($cv)) {


        //     $formation = Formation::where('cv_id', $cv->id)->get();
        //     $experience = Experience::where('cv_id', $cv->id)->get();
        //     $divers = Divers::where('cv_id', $cv->id)->get();
        //     }


        // }


        return view('Employeur.Dashboard.candidats', compact('candidats', 'candidature', 'cv', 'formation', 'experience', 'divers', 'offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('Candidat.create', compact('user'));
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
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'adress' => 'required',
            'photo' => 'required',

        ]);

        $user = auth()->user();

        $candidat =  Candidat::create([
            'user_id' => $user->id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adress' => $request->adress,
            'email' => $request->email,
            'tel' => $request->tel,
            'photo' => $request->photo

        ]);

        // $candidat->roles()->attach(1);
        // $candidat->roles()->attach(2);


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
        $candidat = Candidat::find($id);
        $cv = Cv::where('candidat_id', $candidat->id)->first();
        $formation = '';
        $experience ='';
        $divers ='';
        if (isset($cv)) {

        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();
        }

        return view('Candidat.show', compact('candidat', 'cv', 'formation', 'experience', 'divers'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
