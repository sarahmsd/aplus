<?php

namespace App\Http\Controllers;

use auth;
use Carbon\Carbon;
use Pusher\Pusher;
use App\Models\User;
use App\Models\Offre;
use App\Models\Candidat;
use App\Models\Employeur;
use App\Models\Candidature;
use App\Models\ContratType;
use App\Models\Recrutement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CandidatureNotification;
use App\Notifications\RecrutementNotification;


class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request);
        $offre = Offre::where('id', $request->offre)->with(['contrat_modes'])->first();
        $employeur = Employeur::where('id', $offre->employeur)->first();
        $contratType  = ContratType::where('id', $offre->contrat_type)->first();
        return view('Candidature.create', compact('offre', 'employeur', 'contratType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $use = auth()->user();
        $candidat = Candidat::where('user_id', $use->id)->first();
        $employeur = Employeur::where('user_id', $use->id)->first();
        $offre = Offre::where('id', $request->offre)->first();
        $entreprise = Employeur::where('id', $offre->employeur)->first();
        $user = User::where('id', $entreprise->user_id)->first();

        if (isset($candidat)) {

            $candidature = Candidature::create([
                 'offre_id' => $request->offre,
                 'profil' => 'Candidat',
                 'user_id' => $use->id,
                 'cv' => $request->cv,
                 'message' => $request->message,
                 'linkedin' => $request->linkedin
            ]);

        }elseif (isset($employeur)) {

            $candidature = Candidature::create([
                'offre_id' => $request->offre,
                'profil' => 'Employeur',
                'user_id' => $use->id,
                'cv' => $request->cv,
                 'message' => $request->message,
                 'linkedin' => $request->linkedin
           ]);


        }

        $detail_candidat = [
           'message' => 'Candidature envoyé avec success à propos de l\'offre '. $offre->nom,
        ];

        $detail_employeur = [
            'message' => $use->name . ' ' .' a postulé a votre offre '. $offre->nom,
         ];

          auth()->user()->notify(new CandidatureNotification($detail_candidat));

          $user->notify(new CandidatureNotification($detail_employeur));



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
        //
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
        $user = auth()->user();

        $candidature = Candidature::find($id);

        $offre = Offre::where('id', $candidature->offre_id)->first();
        $candidat = Candidat::where('user_id', $candidature->user_id)->first();
        $utilisateur = User::where('id', $candidature->user_id)->first();


        $candidature->valider = $request->valider;
        $candidature->save();

        $recrutement = Recrutement::create([
            'candidature_id' => $request->candidature,
            'offre_id' => $request->offre,
            'dateDebut' => Carbon::now()
          ]);


          $detail_employeur = [
            'message' => 'Vous avez recruté le candidat '. $candidat->nom,
         ];

         $detail_candidat = [
            'message' => 'L\'entreprise '. $user->name. ' vous a recruté pour l\'offre: '. $offre->nom. ' à laquelle vous avez postulé'
         ];


          auth()->user()->notify(new RecrutementNotification($detail_employeur));
           //dd($utilisateur);
          $utilisateur->notify(new RecrutementNotification($detail_candidat));



        return back();
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
