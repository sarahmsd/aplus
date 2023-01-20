<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Projet;
use App\Models\Investisseur;
use Illuminate\Http\Request;
use App\Models\Investissement;
use App\Models\Message;

class InvestissementController extends Controller
{
    public function store(Request $request,Projet $projet)
    {


        $investissement = Investissement::create([
            'projet_id' => $projet->id,
            'user_id' => auth()->user()->id,
            'validated' => false,
        ]);

        $conversation = Conversation::create([
            'from' => auth()->user()->id,
            'to' => $investissement->user->id,
            'projet_id' => $investissement->projet_id,
        ]);

        $message = Message::create([
            'user_id' => auth()->user()->id,
            'conversation_id' => $conversation->id,
            'content' => "Bonjour, je voulais investir dans votre projet.",
        ]);




        return back();
    }

    public function add(Request $request)
    {
        $investisseurs = Investisseur::findOrFail($request->projet);
        $investisseurs->delete();
        // $investir = $investisseurs->fill(['status' => 0]);
        // if ($investir->isDirty()) {
        //     $investir->save();

            return back();
        // }
    }

    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');

        # code...
        $projets = Projet::where('nomStartup', 'like',"%$q%")
        ->orWhere('description', 'like', "%$q%")->get();


        return view('Projet.investisseurs.search',compact('projets'));


    }
}
