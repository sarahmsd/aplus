<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Offre;
use App\Models\Employeur;
use App\Models\Description;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $employeur = Employeur::where('user_id', $user->id)->first();
        $offres = Offre::where('employeur', $employeur->id)->get();
        $description  = '';
        foreach ($offres as $offre) {
            $description = Description::where('id', $offre->description)->first();

           //dd($lieu);

        }
        return view('Employeur.dashboard', compact(['offres', 'employeur', 'description', 'user']) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('Employeur.create', compact('user'));
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
          // dd($request);
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required',
            'tel' => 'required',
            'adress' => 'required',

        ]);


        $employeur =  Employeur::create([
            'user_id' => $user->id,
            'nom' => $request->nom,
            'adress' => $request->adress,
            'email' => $request->email,
            'tel' => $request->tel,
            'domaineActivité' => $request->activite,
            'description' => $request->description,
            'photo' => $request->photo

        ]);

        $employeur->roles()->attach(1);
        $employeur->roles()->attach(3);
        $employeur->roles()->attach(4);


        return redirect()->route('dashboardEntrerprise');
    }

    public function dashboard()
    {
        return view('Employeur.Dashboard.acceuil');
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
