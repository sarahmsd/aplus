<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class experienceController extends Controller
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
        $experiences = $request->experience;
        $entreprise = $request->entreprise;
        $lieu = $request->lieu;
        $dateDebExp = $request->dateDebExp;
        $dateFinExp = $request->dateFinExp;
        $decrire = $request->decrire;
        $cv = $request->cv;
        for ($i=0; $i < count($experiences); $i++) {

            $experience = Experience::create([

            'fonction' => $experiences[$i],
            'lieu' => $lieu[$i],
            'entreprise' => $entreprise[$i],
            'dateDebut' => $dateDebExp[$i],
            'dateFin' => $dateFinExp[$i],
            'description' => $decrire[$i],
            'cv_id'  => $cv

            ]);

            $experience->cv()->associate($cv)->save();

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
