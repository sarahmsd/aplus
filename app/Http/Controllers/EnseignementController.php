<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Enseignement;
use App\Models\systemeEducatif;
use Illuminate\Http\Request;

class EnseignementController extends Controller
{
    public function index()
    {

        $enseignements = Enseignement::where('systemeEducatif_id', auth()->user()->ecole->systemeEducatif_id)->get();
        $cycles = Cycle::all();
        $systemeEducatif = systemeEducatif::find(auth()->user()->ecole->systemeEducatif_id);
       return view('Ecole.Dashbord.cycles', compact('enseignements', 'cycles', 'systemeEducatif'));
    }
}
