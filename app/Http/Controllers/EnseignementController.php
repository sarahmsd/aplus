<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Enseignement;
use Illuminate\Http\Request;

class EnseignementController extends Controller
{
    public function index()
    {
        // $enseignements = Enseignement::all();

        // $enseignements = Enseignement::all();
        $enseignements = Enseignement::where('systemeEducatif_id',auth()->user()->ecole->systemeEducatif_id)->get();
        $cycles = Cycle::all();

       return view('Ecole.Dashbord.cycles',compact('enseignements','cycles'));
    }
}
