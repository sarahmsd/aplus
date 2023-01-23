<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Offre;
use App\Models\Domaine;
use App\Models\Candidat;
use App\Models\Employeur;
use App\Models\Candidature;
use App\Models\ContratMode;
use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\UserNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $employeur = '';
        $description = '';

        $offres = Offre::with(['lieux'])->with(['contrat_modes'])->latest()->get();
        $domaines = Domaine::all();
        $contratModes = ContratMode::all();
        foreach ($offres as $offre) {
            $employeur = Employeur::where('id', $offre->employeur)->first();
            $description = Description::where('id', $offre->description)->first();
            $deadline = $description->dateLimite;
            $today = Carbon::now();
                //dd($deadline <= $today);

            if ($deadline <= $today) {
               $offre->archive();
            }

        }
       //dd($offres);

        return view('home', compact('offres', 'employeur', 'description', 'domaines', 'contratModes'));
     }

    public function notify() {

        if (auth()->user()) {


           $user = User::first();

          auth()->user()->notify(new UserNotification($user));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markasread($id) {
         if ($id) {
            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
         }

         return back();
    }
}
