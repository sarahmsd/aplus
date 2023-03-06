<?php

namespace App\Http\Controllers;

//use auth;
use Illuminate\Support\Facades\DB;
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
use Illuminate\Support\Facades\Auth;


class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$candidature = Candidature::find($id);
        $user = auth()->user();
        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        $offres = Offre::where('employeur', $employeur->id)->get();
        $candidatures = [];
        foreach ($offres as $offre) {
            $candidatures_offre = $offre->candidatures;
            foreach ($candidatures_offre as $candidature) {
                array_push($candidatures, $candidature);
            }
        }
        return view('Employeur.Dashboard.candidats', compact('candidatures', 'offres','employeur'));
    }

    public function offreCandidature($id)
    {
        $user = auth()->user();
        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        $offre = Offre::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $offre = Offre::where('id', $request->offre)->with(['contrat_modes'])->first();
        $employeur = Employeur::where('id', $offre->employeur)->first();
        $contratType  = ContratType::where('id', $offre->contrat_type)->first();
        
        $user = auth()->user();
        
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
        $entreprise = Employeur::where('id', $offre->employeur)->first();
        //$user = User::where('id', $entreprise->user_id)->first();
        //$candidature = Candidature::where('user_id', $user_id)->where('offre_id', $offre_id)->first();
        $offre = Offre::find($offre_id);
        $employeur = Employeur::where('user_id', $use->id)->first();

        $candidature = Candidature::where('user_id', $user_id)->where('offre_id', $offre_id)->first();
         if ($candidature) {
            return redirect()->back()->with('error', 'Vous avez deja posutle.');
         }
         $file = $request->file('pdf');
         $filename = time().'.'.$file->getClientOriginalExtension();
         $file->move(public_path('pdf'), $filename);

        if (isset($candidat)) {
            //dd($request);
            $candidature = new Candidature();
            $candidature->offre_id = $offre;
            $candidature->profil = 'Candidat';
            $candidature->user_id = $user_id;
            $candidature->file_path = 'pdf/'.$filename;
            $candidature->message = $request->message;
            $candidature->linkedin =$request->linkedin;
            $candidature->save();

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
    public function candidatureOffre(Request $request, $id) {

        $offre = Offre::find($id);
        $user = auth()->user();

        if ($offre && $user) {
            $candidature = new Candidature;
            $candidature->offre_id = $offre->id;
            $candidature->user_id = $user->id;
            $candidature->profil = 'Candidat';
            
            $candidature->linkedin = $request->linkedin;
            $candidature->message = $request->message;

            //Stockage du CV
            $name = $request->file('cv')->hashName();
            $candidature->cv = $name;
            if ($request->file('cv')->move(public_path('cv/'), $name)) {
                $candidature->save();
                $success = true;
            } else
                $success = false;
        }

        if ($success)
            return redirect('home')->withSuccess('Candidature envoyée');
        else
            return back()->withSuccess('Une erreur est survenue lors de l\'envoie de la candidature');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidature = Candidature::find($id);

        return view('Candidature.show', compact('candidature'));
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

    public function valider($id){
        $candidature = Candidature::find($id);
        $candidature->valider = 1;
        $success = $candidature->save();
        return $success
            ? back()->withSuccess('La candidature a été accepté. Une notification sera envoyé au candidat')
            : back()->withSuccess('Une erreur est survenue! La candidature n\'a pas pu être acceptée.');
    }

    public function refuser(Request $request) {
        $candidature = Candidature::find($request->id);
        $candidature->valider = 0;
        $candidature->motif = $request->motif;
        $success = $candidature->save();
        return $success
            ? back()->withSuccess('La candidature a été réfusé. Une notification sera envoyé au candidat avec le motif de refus')
            : back()->withSuccess('Une erreur est survenue! La candidature n\'a pas pu être refusée.');
    }
}
