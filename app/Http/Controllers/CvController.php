<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Cv;
use App\Models\Divers;
use App\Models\Langue;
use App\Models\Modele;
use App\Models\Niveau;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Specialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cvs = Cv::all();
        foreach ($cvs as $key => $cv) {
            $candidat = Candidat::where('id', $cv->candidat_id);
        }

        return view('Cvs.index', compact('cvs', 'candidat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
       $candidat = Candidat::where('user_id', $user->id)->first();
      // dd($candidat);
       $models = Modele::all();
       $niveau = Niveau::all();

       return view('Cvs .create', compact('models', 'niveau', 'candidat', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $formations = $request->formation;
        $etablissement = $request->etablissement;
        $ville = $request->ville;
        $dateDeb = $request->dateDeb;
        $dateFin = $request->dateFin;
        $description = $request->description;

        $experiences = $request->experience;
        $entreprise = $request->entreprise;
        $lieu = $request->lieu;
        $dateDebExp = $request->dateDebExp;
        $dateFinExp = $request->dateFinExp;
        $decrire = $request->decrire;

        $specialites = $request->specialite;

        $langues = $request->langue;
        $niveau = $request->niveau;

        $div = $request->loisir;


        $user = auth()->user();
        $candidat = Candidat::where('user_id', $user->id)->first();

        $cv = Cv::create([
            'candidat_id' => $candidat->id,
            'modele_id' =>  $request->model,
            'postRecherche' => $request->post,
            'adress' => $request->adress,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel
        ]);

        for ($i=0; $i < count($formations); $i++) {

        $formation = Formation::create([
            'nom' => $formations[$i],
            'lieu' => $ville[$i],
            'etablissement' => $etablissement[$i],
            'dateDebut' => $dateDeb[$i],
            'dateFin' => $dateFin[$i],
            'description' => $description[$i],
            'cv_id'  => $cv->id
        ]);

        $formation->cv()->associate($cv)->save();


    }

    for ($i=0; $i < count($experiences); $i++) {

        $experience = Experience::create([

        'fonction' => $experiences[$i],
        'lieu' => $lieu[$i],
        'entreprise' => $entreprise[$i],
        'dateDebut' => $dateDebExp[$i],
        'dateFin' => $dateFinExp[$i],
        'description' => $decrire[$i],
        'cv_id'  => $cv->id

        ]);

        $experience->cv()->associate($cv)->save();

    }

    for ($i=0; $i < count($specialites); $i++) {

        $specialite = Specialite::create([
          'nom' => $specialites[$i]
        ]);

        $specialite->cv()->attach($cv);

    }

    for ($i=0; $i < count($langues); $i++) {

        $langue = Langue::create([
          'nom' => $langues[$i],
          'niveau' => $niveau[$i]
        ]);

        $langue->cv()->attach($cv);

    }

    for ($i=0; $i < count($div); $i++) {

        $divers = Divers::create([
           'nom' => $div[$i],
           'cv_id'  => $cv->id

        ]);

        $divers->cv()->associate($cv)->save();

    }




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
        if (isset($user)) {
            $candidat = Candidat::where('user_id', $user->id)->first();

        }else {
            $candidat = Candidat::find($id);
        }
        $cv = Cv::with(['langues'])->with(['specialites'])->find($id);
        foreach ($cv->langues as $langue) {
            $niveau = Niveau::where('id', $langue->niveau)->first();
        }
        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();

        return view('Cvs.show', compact('formation', 'experience', 'divers', 'cv', 'user', 'candidat', 'niveau'));

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

    public function cv()
    {
        $user = auth()->user();
        if (isset($user)) {
            $candidat = Candidat::where('user_id', $user->id)->first();

        }
         $image = public_path('images/'. $candidat->photo);
         $imageData = base64_encode(file_get_contents($image));
         $src = 'data:' . mime_content_type($image) . ';base64,' . $imageData;
         //dd($src);

        $cv = Cv::with(['langues'])->with(['specialites'])->where('candidat_id', $candidat->id)->first();
        foreach ($cv->langues as $langue) {
            $niveau = Niveau::where('id', $langue->niveau)->first();
        }
        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();

        return view('Cvs.cv', compact('formation', 'experience', 'divers', 'cv', 'user', 'candidat', 'niveau', 'src'));

    }
    public function telecharger()
    {


        $user = auth()->user();
        if (isset($user)) {
            $candidat = Candidat::where('user_id', $user->id)->first();

        }
        $image = public_path('images/'. $candidat->photo) ;
        $imageData = base64_encode(file_get_contents($image));
        $src = 'data:' . mime_content_type($image) . ';base64,' . $imageData;

       $cv = Cv::with(['langues'])->with(['specialites'])->where('candidat_id', $candidat->id)->first();
        foreach ($cv->langues as $langue) {
            $niveau = Niveau::where('id', $langue->niveau)->first();
        }
        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                 'allow_self_signed' => true
            ]
        ]);

        $pdf = PDF::loadView('Cvs.cv', compact('formation', 'experience', 'divers', 'cv', 'user', 'candidat', 'niveau', 'src'))->setPaper('a2', 'portrait');
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('cv.pdf');//download('cv.pdf');
    }

}
