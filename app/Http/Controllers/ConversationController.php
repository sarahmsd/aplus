<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Employeur;
use App\Models\Offre;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
       $conversations = auth()->user()->conversations()->latest()->get();

      return view('conversations.index', compact('conversations'));
    }
    public function create()
    {
        $user = auth()->user();

        $employeur = Employeur::where('user_id', auth()->user()->id)->first();
        //dd($employeur->id);
        $offres = Offre::where('employeur', $employeur->id)->get();
        $nbre_offre = Offre::where('employeur', $employeur->id)->count();
        
        return view('Employeur.Dashboard/message', compact('user', 'nbre_offre'));

    }
    public function show(Conversation $conversation)
    {
        return view('conversations.show',compact('conversation'));
        
    }
}
