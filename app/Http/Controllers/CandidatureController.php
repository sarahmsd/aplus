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
        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        //$offres = Offre::where('employeur', $employeur->id)->get();
        $offres = Offre::where('employeur', $employeur->id)->latest()->get();
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

                $candidatures = Candidature::where('user_id', $candidat->user_id)->first();
                }
            }
        }
        return view('Employeur.Dashboard.candidats', compact('candidatures', 'offres','employeur','candidats'));
        

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
        //$candidat = Candidat::where('user_id', $user->id)->first();        
        //$candidature = Candidature::where('user_id', $user->id)->where('profil', 'Candidat')->where('offre_id', $offre->id)->first();
        
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
         $cv = $request->cv;
         $filename=time().'.'.$cv->getClientOriginalExtension();
         $request->file->move('asset',$filename);

        if (isset($candidat)) {
            //dd($request);
            $candidature = new Candidature();
            $candidature->offre_id = $offre;
            $candidature->profil = 'Candidat';
            $candidature->user_id = $user_id;
            $candidature->cv = $filename;
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
    public function candidatureOffre(Request $request, $id){
       // dd($request);
        $offre =Offre::find($id);
        $user = auth()->user();

        

        if ($offre && $user) {
            $candidature = new Candidature;
            $candidature->offre_id = $offre->id;
            $candidature->user_id = $user->id;
            $candidature->profil = 'Candidat';
            $candidature->cv = $request->cv;
            $candidature->linkedin = $request->linkedin;
            $candidature->message = $request->message;
            $candidature->save();

            return redirect()->back()->with('success', 'Candidature envoyée');

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
