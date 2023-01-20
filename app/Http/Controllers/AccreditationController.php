<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    public function save(Request $request)
    {


        $filiere = new Accreditation();
        $filiere->nomAcreditation = $request->nomAcreditation;
        $filiere->filiere_id = $request->filiere_id;
        $filiere->save();

        return back();


    }
}
