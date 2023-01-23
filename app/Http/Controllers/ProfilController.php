<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Cv;
use App\Models\Divers;
use App\Models\Candidat;
use Barryvdh\DomPDF\PDF;
use App\Models\Formation;
use App\Models\Experience;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $candidat = Candidat::where('user_id', $user->id)->first();
        $cv = Cv::with(['langues'])->with(['specialites'])->where('candidat_id', $candidat->id)->first();
        $formation = '';
        $divers ='';
        $experience = '';
        if(isset($cv)){
        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();

        }


        return view('Profil.index', compact(['user', 'candidat', 'cv', 'formation', 'experience', 'divers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profil.Choix');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $user->profil = $request->profil;
        $user->save();

        if ($request->profil == 'Employeur') {
            return redirect()->route('employeurs.create');
        }
        elseif ($request->profil == 'Candidat') {
            return redirect()->route('candidats.create');
        }
        elseif ($request->profil == 'Ecole') {
            return redirect()->route('Ecole');
        }
        else{
            return redirect(RouteServiceProvider::HOME);
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

    public function choisir(){
        return view('Profil.Choix');
    }


}
