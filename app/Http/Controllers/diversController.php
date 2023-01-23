<?php

namespace App\Http\Controllers;

use App\Models\Divers;
use Illuminate\Http\Request;

class diversController extends Controller
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
        //dd($request->loisir);
        $div = $request->loisir;
        $cv = $request->cv;

        if ($div > 1) {



        for ($i=0; $i < count($div); $i++) {

            $divers = Divers::create([
               'nom' => $div[$i],
               'cv_id'  => $cv

            ]);

            $divers->cv()->associate($cv)->save();

        }
    }else {

        $divers = Divers::create([
            'nom' => $request->loisir,
            'cv_id'  => $cv

         ]);

         $divers->cv()->associate($cv)->save();

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
