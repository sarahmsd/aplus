<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Formation;
use Illuminate\Http\Request;

class formationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $candidat = Candidat::where('user_id', auth()->user()->id);
        dd($candidat);
        $cv = Cv::where('candidat_id', $candidat->id);
         return view('Formation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $cv = $request->cv;

        for ($i=0; $i < count($formations); $i++) {

            $formation = Formation::create([
                'nom' => $formations[$i],
                'lieu' => $ville[$i],
                'etablissement' => $etablissement[$i],
                'dateDebut' => $dateDeb[$i],
                'dateFin' => $dateFin[$i],
                'description' => $description[$i],
                'cv_id'  => $cv
            ]);

            $formation->cv()->associate($cv)->save();


        }
        return back();
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
