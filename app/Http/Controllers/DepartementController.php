<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{


    public function index()
    {


        return view('Ecole.Dashbord.Departements.departements');

    }

    public function add()
    {

        return view('Ecole.Dashbord.Departements.add_departement');

    }

    public function show($id)
    {
        $departement = Departement::findOrfail($id);

        return view('Ecole.Dashbord.Departements.details_departement',compact('departement'));
    }

    public function edit($id)
    {
        $departement = Departement::findOrfail($id);

        return view('Ecole.Dashbord.Departements.edit_departement',compact('departement'));
    }


    public function save(Request $request)
    {

        $id = $request->ecole_id;

        $departement = new Departement();
        $departement->nomDepartement = $request->nomDepartement;
        $departement->descriptionDepartement = $request->descriptionDepartement;
        $departement->save();

         $departement->ecoles()->attach($id);


         return redirect(route('departement.index'));


    }


    public function update(Request $request,$id)
    {
        $data =Departement::find($id);
        $data->nomDepartement =$request->nomDepartement;
        $data->descriptionDepartement =$request->descriptionDepartement;


        $data->update();

        return redirect(route('show.departement', $id)); ;
    }


    public function delete($id)
    {
        $data =Departement::find($id);

        $data->delete();

        return redirect(route('departement.index'));
    }


    public function search()
    {
        request()->validate([
            'q'=>'required|min:3'
        ]);

        $q = request()->input('q');
        // $test = request()->input('test');

        # code...
        $departements = Departement::where('nomDepartement', 'like',"%$q%")
        ->orWhere('descriptionDepartement', 'like', "%$q%")->get();


        return view('Ecole.Dashbord.Departements.search',compact('departements'));

    }
}
