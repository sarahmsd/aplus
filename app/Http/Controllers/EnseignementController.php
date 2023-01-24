<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Ecole;
use App\Models\EcoleEns;
use App\Models\EnsCycle;
use App\Models\Enseignement;
use App\Models\systemeEducatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnseignementController extends Controller
{
    public function index()
    {
        $ecole = Ecole::where('user_id', auth()->user()->id)->first();
        $enseignements = Enseignement::where('systemeEducatif_id', $ecole->systemeEducatif_id)->get();
        
        foreach ($enseignements as $enseignement) {
            $allcycles = Cycle::where('enseignement_id', $enseignement->id)->get();
            $cyclesActifs = EnsCycle::where('ecole_id', $ecole->id)->where('enseignement_id', $enseignement->id)->get();

            foreach ($allcycles as $cycle) {
                foreach ($cyclesActifs as $ca) {
                    if ($cycle->id == $ca->cycle_id) {
                        $cycle->actif = 1;
                    }
                }
            }

            $enseignement->cylesEns = $allcycles;
        }

        $systemeEducatif = systemeEducatif::find($ecole->systemeEducatif_id);

        return view('Ecole.Dashbord.cycles', compact('enseignements', 'systemeEducatif'));
    }

    public function addCycle(Request $request, $id)
    {
        DB::beginTransaction();
        try {

            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $enseignement = Enseignement::find($id);
            $ecoleEns = EcoleEns::where('ecole_id', $ecole->id)->where('enseignement_id', $enseignement->id);
            $enscycles = EnsCycle::where('ecole_id', $ecole->id)->where('enseignement_id', $enseignement->id)->get();

            if ($ecoleEns->get()->isEmpty()) {
                $eens = new EcoleEns();
                $eens->enseignement_id = $id;
                $eens->ecole_id = $ecole->id;
                $eens->save();
                $ecole->EcoleEns()->attach($eens->id);
            }else
                $eens = $ecoleEns->first();

            foreach ($enscycles as $ec) {
                $ec->delete();
            }

            if ($request->cycle) {
                foreach ($request->cycle as $cycle) {
                
                    $c = Cycle::find($cycle);
                    $enscycle = new EnsCycle();
                    $enscycle->cycle_id = $cycle;
                    $enscycle->ecole_id = $ecole->id;
                    $enscycle->enseignement_id = $c->enseignement_id;
                    $enscycle->save();
    
                    $eens->EnsCycles()->attach($enscycle->id);
                }
            }else {
                $ecole->EcoleEns()->detach($eens->id);
                $eens->delete();
            }

            DB::commit();
            $success = true;
        }catch (\Exception $e) {
            $success = false;
            DB::rollBack();
            dd($e);
        }

        if ($success) {
            return back()->withSuccess('Votre compte a bien été ajouté!');
        }else {
            return back()->withFail('Nous avons rencontré un problème en ajoutant votre compte!');
        }
    }
}
