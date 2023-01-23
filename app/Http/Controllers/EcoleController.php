<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Ecole;
use App\Models\Filiere;
use App\Models\EcoleEns;
use App\Models\EnsCycle;
use App\Models\Departement;
use App\Models\Enseignement;
use Illuminate\Http\Request;
use App\Models\systemeEducatif;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecoles = Ecole::all();
        return view('Ecole.list',compact('ecoles'));
    }

    public function dashbord()
    {
        // $ecoles = Ecole::all();
        $enseignements = Enseignement::all();
        // $enseignements = Enseignement::where('system');
        $cycles = Cycle::all();
        $departements = Departement::all();
        $filieres = Filiere::all();
        return view('Ecole.Dashbord.dashboard-ecole',compact('enseignements','cycles','departements','filieres'));
    }




    public function test()
    {
        $systemeEducatifs = systemeEducatif::all();
        $enseignements = Enseignement::all();
        $cycles = Cycle::all();
        return view('Ecole.ecole',compact('systemeEducatifs','enseignements','cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd("jesuis ecole");
        // $systemeEducatifs = systemeEducatif::all();
        // $enseignements = Enseignement::all();
        // $cycles = Cycle::all();
        return view('Ecole.Dashbord.configurations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ecole = new Ecole();
        $ecole->user_id = auth()->user()->id;
        $ecole->systemeEducatif_id = $request->systemeEducatif_id;
        $ecole->etablissement = $request->etablissement;
        // $ecole->fr_enseignements = $request->fr_enseignements;

        $ecole->ecole = $request->ecole;
        $ecole->sigle = $request->sigle;
        $ecole->email = $request->email;
        $ecole->adresse = $request->adresse;
        $ecole->telephone = $request->telephone;
        $ecole->siteWeb = $request->siteWeb;
        $ecole->linkedin = $request->linkedin;
        $ecole->description = $request->description;

        $ecole->save();

        foreach ($request->enseignement as $key=>$enseignement) {
            $ecoleEns = new EcoleEns();
            $ecoleEns->enseignement_id = $request->enseignement[$key];
            $ecoleEns->save();
            foreach ($request->cycle as $key => $cycle) {
                $EnsCycle = new EnsCycle();
                $EnsCycle->cycle_id = $request->cycle[$key];
                $EnsCycle->save();

                $ecoleEns->EnsCycles()->attach($EnsCycle->id);

            }

                $ecole->Ecoleens()->attach($ecoleEns->id);



         }


         return redirect()->route('list.ecole');
         ;
        // foreach ($request->cycle as $key=>$cycle) {
        //     $cycle = $request->cycle;

        //     if ($ecole->save()) {
        //         $ecole->cycles()->attach($cycle);
        //     }
        //     return back();

        //  }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecole = Ecole::find($id);
        return view('Ecole.show',compact('ecole'));
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


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        $test = request()->input('test');

        # code...
        $ecoles = Ecole::where('ecole', 'like',"%$q%")
        ->orWhere('description', 'like', "%$q%")
        ->orWhere('etablissement', 'like', "%$q%")
        ->orWhere('adresse', 'like', "%$q%")->get();


        return view('Ecole.search',compact('ecoles'));


    }


    public function configuration()
    {
        $systemeEducatifs = systemeEducatif::all();
        return view('Ecole.Dashbord.configurations',compact('systemeEducatifs'));
    }
}
